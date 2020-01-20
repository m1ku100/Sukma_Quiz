<?php

namespace App\Http\Controllers;

use App\Guru;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class GuruController extends Controller
{
    public function index(Request $request)
    {
    		$data_guru = \App\Guru::all();
    	 $data_guru = guru::paginate(5);
    	return view('guru.index',['data_guru'=>  $data_guru]);
    }
    public function create(Request $request)
    {
        //insert ke table user
        $user = new \App\User;
        $user->role ='guru';
        $user->name = $request->nama;
        $user->jenis_kelamin = $request->jenis_kelamin;
        $user->email =$request->email;
        $user->password = bcrypt($request->password);
        $user->remember_token = str_random();
        $user->save();

        //insert ke table siswa
        $request->request->add(['id' =>  $user->id]);
        $guru=\App\Guru::create($request->all());

        return redirect('/guru')->with('sukses','Data Berhasil Ditambahkan');
    }
    Public function edit ($id)
    {
    	$guru=\App\Guru::find($id);
    	return view('guru/edit',['guru'=> $guru]);
    }
    public function update(Request $request, $id)
    {
    	$guru=\App\Guru::find($id);
    	$guru->update($request->all());
    	return redirect('/guru')->with('sukses','Data Berhasil Diupdate');
    }
     Public function delete ($id)
    {
    	$guru=\App\Guru::find($id);
    	$guru->delete();
    	return redirect('/guru')->with('sukses','Data Berhasil Dihapus');
    }
    public function profile($id)
    {
        $guru=\App\Guru::find($id);
        return view('guru/profile',['guru'=>$guru]);
    }
  }
