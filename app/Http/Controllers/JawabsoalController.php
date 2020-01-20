<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jawaban;
use App\Siswa;
use App\User;
use App\Soal;

class JawabsoalController extends Controller
{

   public function update(Request $request){

    $id_siswa= $request->id_siswa;
    $nomer= $request->no;
    $this->validate($request,[
      'jawaban' => 'required',
      'no' => 'required',
      'pelajaran' => 'required',
      'soal' => 'required',
      'kunci_jawaban' => 'required',
      'id_siswa' => 'required',
	    'pelajaran' => 'required'
    ]);
    Jawaban::create([
       		'nomer1' => $request->no,
       		'jawaban' => $request->jawaban,
          'soal' => $request->soal,
          'id_siswa' => $request->id_siswa,
          'pelajaran' => $request->pelajaran,
          'soal_id' => $request->soal_id,
          'kunci_jawaban' => $request->kunci_jawaban,

       	]);
    //$update = Jawaban::find($id_siswa)->find($nomer);

    $nomer = $request->no;
    $next = $nomer + 1;
    $idsiswa= $request->id_siswa;
    //$emailsiswa= auth()->user()->email;
  
    $data_soal_kerjakan = Jawaban::join('soal', 'nilai_siswa.soal_id', '=','soal.id')->where('nilai_siswa.id_siswa','=',$idsiswa)
    ->where('nilai_siswa.nomer','=',1)->inRandomOrder(1)->limit(1)->get();

    $data_siswa = siswa::where('siswa.email','=', $emailsiswa)->get();
    return view('soal.soal_kerjakan',['data_soal_kerjakan' => $data_soal_kerjakan, 'data_siswa' => $data_siswa]);
    }
  }
