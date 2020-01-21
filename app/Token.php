<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = 'token';
    protected $fillable = ['id', 'user', 'nama_ujian', 'id_mapel', 'durasi', 'tanggal_mulai', 'jurusan', 'jumlah_soal', 'token'];

    public function siswa()
    {
        return $this->belongsToMany(Siswa::class);
    }

    public function soal()
    {
        return $this->belongsTo(Soal::class);
    }

    public function mapel()
    {
        return $this->hasOne(Mapel::class);
    }
}
