<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    protected $table ='soal';
 	protected $fillable =['id_mapel','kelas','jurusan','soal','tingkatan','pilihan_a','pilihan_b','pilihan_c','pilihan_d','pilihan_e','kunci_jawaban','skor'];

 	public function Siswa()
 	{
 		return $this->belongsToMany(Siswa::class);
 	}
  public function Token()
  {
    return $this->hasOne(Token::class);
  }
  public function Mapel()
 	{
 		return $this->hasOne(Mapel::class);
 	}
}
