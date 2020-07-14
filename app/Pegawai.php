<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
	protected $table = 'pegawai';
	protected $fillable=['nama', 'jenis_kelamin','agama','alamat','masuk_kerja','user_id'];
    public function user(){
    	return $this->belongsTo('App\user','user_id','id');
    }
    public function absensi(){
    	return $this->hasOne(Absensi::class);
    }
}
