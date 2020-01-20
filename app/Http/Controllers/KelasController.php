<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KelasController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_siswa =\App\Siswa::where('kelas','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_siswa = \App\Siswa::all();
    	}
    	return view('kelas.index',['data_siswa'=>  $data_siswa]);
    }
}