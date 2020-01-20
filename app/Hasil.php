<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class hasil extends Model
{
    protected $table ='nilai';
 	protected $fillable =['id_siswa','token','id_mapel','nilai'];
 	
 	public function jawaban() { 
      return $this->hasOne(Jawaban::class); 
	}
}
