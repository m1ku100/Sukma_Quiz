<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    protected $table = 'mapel';
    protected $fillable = ['kode','nama', 'semester', 'jurusan'];

    public function mapel()
 	{
 		return $this->belongsToMany(Mapel::class)->withPivot(['nilai']);
 	}
 	public function guru()
 	{
 		return $this->hasOne(guru::class);
 	}
 	public function token()
 	{
 		return $this->belongsTo(token::class);
 	}
}
