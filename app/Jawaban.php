<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    protected $table ='lembar_siswa';
    protected $fillable = ['id', 'id_siswa', 'token','id_mapel','soal','soal_id','nomer','kunci_jawaban','jawaban','skor','warna','minutes'];

 	public function siswa()
 	{
 		return $this->belongsToMany(Siswa::class);
 	}
  public function soal()
 	{
 		return $this->belongsToMany(Soal::class);
 	}
 	public function hasil() 
	{ 
    return $this->belongsTo(Hasil::class); 
	}
}
