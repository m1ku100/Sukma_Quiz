<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    protected $table ='guru';
 	protected $fillable =['nama','jenis_kelamin','pelajaran','jurusan','alamat','avatar','email','password'];

public function mapel() { 
      return $this->hasOne(mapel::class); 
	}
}