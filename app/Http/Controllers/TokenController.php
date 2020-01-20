<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\guru;
use App\token;
use App\mapel;

class TokenController extends Controller
{
      public function index(Request $request)
      {
        $nama= auth()->user()->email;
        $guru= guru::where('email','=',$nama)->get();
        $mapel= guru::join('mapel', 'guru.pelajaran', '=','mapel.nama')->get();
        $data_token = token::all();
        return view('token/index',['guru'=> $guru,'data_token' => $data_token,'mapel' => $mapel ]);
      }
       public function index2()
      {
        $nama= auth()->user()->email;
        $guru= guru::where('email','=',$nama)->get();
        $mapel= guru::join('mapel', 'guru.pelajaran', '=','mapel.nama')->get();
        $data_token = token::all();
        return view('token/index2',['guru'=> $guru,'data_token' => $data_token,'mapel' => $mapel ]);
      }
      public function create(Request $request)
      {
        \App\Token::create($request->all());
        return redirect('/token')->with('sukses','Token Berhasil Ditambahkan');
      }
      Public function edit ($id)
      {
        $token=\App\Token::find($id);
        return view('token/edit',['token'=> $token]);
      }
      public function update(Request $request, $id)
      {
        $token=\App\Token::find($id);
        $token->update($request->all());
        return redirect('/token')->with('sukses','Data Berhasil Diupdate');
      }
       Public function delete ($id)
      {
        $token=\App\Token::find($id);
        $token->delete();
        return redirect('/token')->with('sukses','Data Berhasil Dihapus');
      }

  }
