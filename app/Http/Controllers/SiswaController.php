<?php

namespace App\Http\Controllers;

use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
    	
    		$data_siswa = \App\Siswa::all();
        $data_siswa = siswa::paginate(5);
    	return view('siswa.index',['data_siswa'=>  $data_siswa]);
    }
    public function create(Request $request)
    {
        //insert ke table user
        $user = new \App\User;
        $user->role ='siswa';
        $user->name = $request->name;
        $user->jenis_kelamin = $request->jenis_kelamin;

        $user->email =$request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        //insert ke table siswa
        $request->request->add(['id' =>  $user->id]);
    	$siswa=\App\Siswa::create($request->all());

    	return redirect('/siswa')->with('sukses','Data Berhasil Ditambahkan');
    }
    Public function edit ($id)
    {
    	$siswa=\App\Siswa::find($id);
    	return view('siswa/edit',['siswa'=> $siswa]);
    }
    public function update(Request $request, $id)
    {
        //dd($request->all());
    	$siswa=\App\Siswa::find($id);
    	$siswa->update($request->all());
        if($request->hasFile('avatar')){
            $request->file('avatar')->move('images/', $request->file('avatar')->getClientOriginalName());
            $siswa->avatar =  $request->file('avatar')->getClientOriginalName();
            $siswa->save();
        }
    	return redirect('/siswa')->with('sukses','Data Berhasil Diupdate');
    }
     Public function delete($id)
    {
    	$siswa=\App\Siswa::find($id);
    	$siswa->delete();
    	return redirect('/siswa')->with('sukses','Data Berhasil Dihapus');
    }
    public function profile($id)
    {
        $siswa=\App\Siswa::find($id);
        return view('siswa/profile',['siswa'=>$siswa]);
    }
}
