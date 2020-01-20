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

    Public function kerjakan(Request $request)
    {

        $token = $request->token;

        $data_soal = token::join('soal', 'token.id_mapel', '=', 'soal.id_mapel')->where('token.token', '=', $token)->inRandomOrder()->limit(100)->get();
        $emailsiswa = auth()->user()->email;
        $data_siswa = siswa::where('siswa.email', '=', $emailsiswa)->get();
        if (Token::where('token', '=', $token)) {
            $data_token = Token::where('token', '=', $token)->get();
            return view('soal.kerjakan', ['data_soal' => $data_soal, 'data_siswa' => $data_siswa, 'data_token' => $data_token]);
        } else {
            echo "error";
        }
        // return redirect('dashboard')->with('Maaf Token yang anda masukkan sudah tidak berlaku');
    }

    public function simpan_jawaban(Request $request)
    {
        // dd($request);
        $token1 = $request->token;
        $id_siswa = $request->id_siswa;
        $nomer = $request->jumlah;
        //create soal agar tdk doble
        if (Jawaban::where('token', '=', $token1)->where('id_siswa', '=', $id_siswa)->first() != null) {

        } else {

            for ($x = 0; $x < $nomer; $x++) {
                $data_soal = DB::table('soal')->paginate(1);
                //insert data laravel biasa
                $tambah = new Jawaban;
                $tambah->nomer = $request->no[$x];
                $tambah->jawaban = "";
                $tambah->soal = $request->soal[$x];
                $tambah->id_siswa = $request->id_siswa;
                $tambah->token = $request->token;
                $tambah->id_mapel = $request->id_mapel[$x];
                $tambah->soal_id = $request->soal_id[$x];
                $tambah->kunci_jawaban = $request->kunci_jawaban[$x];
                $tambah->skor = $request->skor[$x];
                $tambah->warna = "btn-red";
                $tambah->minutes = "0";
                $tambah->save();
            }
        }
        $idsiswa = $request->id_siswa;
        $emailsiswa = auth()->user()->email;
        $no = 1;

        if (isset($request->simpan)) {
            $no = $request->nomer;
            if (Jawaban::where('id_siswa', '=', $id_siswa)->where('token', '=', $token1)->count('lembar_siswa.nomer') != $no) {
                $no = $request->nomer;
                $no++;
                // $lembar_siswa=\App\Jawaban::find($request->id);
                // $lembar_siswa->update($request->all());
                $tes = $request->jawaban;
                if ($tes == null) {
                    $lembar_siswa = \App\Jawaban::find($request->id);
                    // $lembar_siswa->update($request->all());
                    $lembar_siswa->id_siswa = $request->id_siswa;
                    $lembar_siswa->token = $request->token;
                    $lembar_siswa->id_mapel = $request->id_mapel;
                    $lembar_siswa->soal = $request->soal;
                    $lembar_siswa->soal_id = $request->soal_id;
                    $lembar_siswa->nomer = $request->nomer;
                    $lembar_siswa->kunci_jawaban = $request->kunci_jawaban;
                    $lembar_siswa->jawaban = "0";
                    $lembar_siswa->skor = $request->skor;
                    $lembar_siswa->warna = "btn-red";
                    $lembar_siswa->save();
                } else {
                    $lembar_siswa = \App\Jawaban::find($request->id);
                    // $lembar_siswa->update($request->all());
                    $lembar_siswa->id_siswa = $request->id_siswa;
                    $lembar_siswa->token = $request->token;
                    $lembar_siswa->id_mapel = $request->id_mapel;
                    $lembar_siswa->soal = $request->soal;
                    $lembar_siswa->soal_id = $request->soal_id;
                    $lembar_siswa->nomer = $request->nomer;
                    $lembar_siswa->kunci_jawaban = $request->kunci_jawaban;
                    $lembar_siswa->jawaban = $request->jawaban;
                    $lembar_siswa->skor = $request->skor;
                    $lembar_siswa->warna = "btn-success";
                    $lembar_siswa->save();
                }
            } else {
                // if(){
                $lembar_siswa = \App\Jawaban::find($request->id);
                $lembar_siswa->update($request->only('jawaban', 'warna', 'minutes'));

                //        $lembar_siswa->warna = "btn-red";
                //          $lembar_siswa->jawaban = "";
                // $tambah->minutes= "0";
                // $tambah->save();
                $token1 = $request->token;
                $peroleh = Jawaban::where('lembar_siswa.id_siswa', '=', $idsiswa)
                    ->where('lembar_siswa.token', '=', $token1)
                    ->whereColumn('kunci_jawaban', '=', 'jawaban')->sum('skor');
                $totalnilai = Jawaban::where('lembar_siswa.id_siswa', '=', $idsiswa)
                    ->where('lembar_siswa.token', '=', $token1)->sum('skor');
                $siswa = $request->id_siswa;
                $token = $request->token;
                $id_mapel = $request->id_mapel;

                $nilaiHasil = ($peroleh / $totalnilai) * 100;
                return view('/soal/coba', ['nilaiHasil' => $nilaiHasil, 'siswa' => $siswa, 'token' => $token, 'id_mapel' => $id_mapel]);
            }
        } else {


        }
        if ($no == 1) {
            $tombol = 'disabled';
            $tombol1 = 'Next';
        } elseif (Jawaban::where('id_siswa', '=', $id_siswa)->where('token', '=', $token1)->count('lembar_siswa.nomer') == $no) {
            $tombol1 = 'Selesai';
            $tombol = '';
        } else {
            $tombol = '';
            $tombol1 = 'Next';
        }
        if (isset($request->back)) {
            $no = $request->nomer;
            $no -= 1;
        }
        if (isset($request->soalpinggir)) {
            $no = $request->soalpinggir;
        }
        $token = $request->token;
        //tampil soal
        $data_soal_kerjakan = Jawaban::join('soal', 'lembar_siswa.soal_id', '=', 'soal.id')->where('lembar_siswa.id_siswa', '=', $idsiswa)->where('lembar_siswa.token', '=', $token)
            ->where('lembar_siswa.nomer', '=', $no)->paginate(1);

        $data_siswa = siswa::where('siswa.email', '=', $emailsiswa)->get();
        $data_token = Token::where('token.token', '=', $token)->first();
        $updatesoal = Jawaban::where('lembar_siswa.id_siswa', '=', $idsiswa)
            ->where('lembar_siswa.nomer', '=', $no)->where('lembar_siswa.token', '=', $token)->get();
        //botton pinggir
        $data_soal_kerjakan1 = Jawaban::where('lembar_siswa.id_siswa', '=', $idsiswa)->where('lembar_siswa.token', '=', $token)->get();
        // dd($data_soal_kerjakan);
        return view('/soal/soal_kerjakan', ['data_soal_kerjakan' => $data_soal_kerjakan, 'data_soal_kerjakan1' => $data_soal_kerjakan1, 'data_siswa' => $data_siswa, 'data_token' => $data_token, 'updatesoal' => $updatesoal, 'tombol' => $tombol, 'tombol1' => $tombol1]);
    }

    public function simpan_nilai(Request $request)
    {
        $nilai = new Hasil;
        $nilai->id_siswa = $request->id_siswa;
        $nilai->token = $request->token;
        $nilai->id_mapel = $request->id_mapel;
        $nilai->nilai = $request->nilai;
        $nilai->save();
        return redirect('/dashboard');

    }
}
