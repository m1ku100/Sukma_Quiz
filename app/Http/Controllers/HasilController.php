<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class HasilController extends Controller
{
    public function index(Request $request)
    {
    	if($request->has('cari')){
    		$data_hasil =\App\Hasil::where('pelajran','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$data_hasil = \App\Hasil::all();
    	}
    	return view('hasil.index',['data_hasil'=>  $data_hasil]);
    }
}
