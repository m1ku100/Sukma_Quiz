<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jawaban;
use App\siswa;

class NilaiController extends Controller
{
public function index(Request $id)
    {
    	$siswa=Jawaban::distinct()->get();
    	$data_nilai = \App\Hasil::all();
        
    	return view('nilai.index',['siswa'=> $siswa,'data_nilai' => $data_nilai ]);
    }
    public function index2()
    {
        $siswa=Jawaban::distinct()->get();
        $data_nilai = \App\Hasil::all();
        
        return view('nilai.index2',['siswa'=> $siswa,'data_nilai' => $data_nilai ]);
    }
}
