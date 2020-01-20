<?php

namespace App\Http\Controllers;

use App\Mapel;
use Illuminate\Http\Request;

class MapelController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_mapel =\App\Mapel ::where('nama','LIKE','%'.$request->cari.'%')->get();
        }else{
            $data_mapel = \App\Mapel ::all();
        }
        return view('mapel.index',['data_mapel'=>  $data_mapel]);
    }
    public function create(Request $request)
    {
    	\App\Mapel::create($request->all());
    	return redirect('/mapel')->with('sukses','Data Berhasil Ditambahkan');
    }
    Public function edit ($id)
    {
    	$mapel=\App\Mapel::find($id);
    	return view('mapel/edit',['mapel'=> $mapel]);
    }
    public function update(Request $request, $id)
    {
    	$mapel=\App\Mapel::find($id);
    	$mapel->update($request->all());
    	return redirect('/mapel')->with('sukses','Data Berhasil Diupdate');
    }
     Public function delete ($id)
    {
    	$mapel=\App\Mapel::find($id); 
    	$mapel->delete();
    	return redirect('/mapel')->with('sukses','Data Berhasil Dihapus');
    }

}