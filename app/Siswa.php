<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    protected $table = 'siswa';
    protected $fillable = ['id', 'email', 'name', 'jenis_kelamin', 'password', 'kelas', 'jurusan', 'ruang', 'alamat', 'avatar', 'user_id'];

    public function getAvatar()
    {
        if (!$this->avatar) {
            return asset('images/default.jpg');
        }

        return asset('images/' . $this->avatar);
    }

    public function mapel()
    {
        return $this->belongsToMany(Mapel::class)->withPivot(['nilai']);
    }

    public function Jawaban()
    {
        return $this->belongsToMany(Jawaban::class);
    }

    public function soal()
    {
        return $this->hasMany(Soal::class);
    }

    public function token()
    {
        return $this->hasMany(token::class);
    }
}
