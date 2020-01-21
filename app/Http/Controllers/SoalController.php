<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Jawaban;
use App\Hasil;
use App\Siswa;
use App\User;
use App\Soal;
use App\Token;

class SoalController extends Controller
{
    public function index(Request $request)
    {

        $data_soal = \App\Soal::all();
        $data_soal = Soal::paginate(3);
        return view('soal.index', ['data_soal' => $data_soal]);
    }

    public function create(Request $request)
    {
        \App\Soal::create($request->all());
        return redirect('/soal')->with('sukses', 'Data Berhasil Ditambahkan');
    }

    Public function edit($id)
    {
        $soal = \App\Soal::find($id);
        return view('soal/edit', ['soal' => $soal]);
    }

    public function update(Request $request, $id)
    {
        $soal = \App\Soal::find($id);
        $soal->update($request->all());
        return redirect('/soal')->with('sukses', 'Data Berhasil Diupdate');
    }

    Public function delete($id)
    {
        $soal = \App\Soal::find($id);
        $soal->delete();
        return redirect('/soal')->with('sukses', 'Data Berhasil Dihapus');
    }

    Public function showQuiz(Request $request)
    {
        $no = 1;
        $token = Token::where('token', $request->token)->first();

        if ($token) {
            $data_soal = Token::join('soal', 'token.id_mapel', '=', 'soal.id_mapel')
                ->where('token.token', $token->token)->inRandomOrder()->limit(100)->get();

            return view('soal.kerjakan', compact('no','data_soal', 'token'));

        } else {
            return redirect('dashboard')->with('warning', 'Maaf Token yang anda masukkan sudah tidak berlaku');
        }
    }

    public function loadQuizAnswers($ids)
    {
        return Soal::whereIn('id', explode(",", $ids))
            ->orderBy('id')->get()->pluck('kunci_jawaban')->toJson();
    }

    public function submitQuiz(Request $request)
    {
        return Hasil::create([
            'id_siswa' => $request->id_siswa,
            'token' => $request->token,
            'id_mapel' => $request->id_mapel,
            'nilai' => $request->nilai
        ]);
    }
}
