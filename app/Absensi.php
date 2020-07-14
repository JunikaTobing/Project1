<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Absensi extends Model
{
	protected $table = 'absensi';
	protected $fillable =['user_id','tanggal_masuk','jam_masuk','id_keluar','keterangan'];
    public function user(){
    	return $this->belongsTo('App\user','user_id','id');
    }
		public function keluar(){
			return $this->belongsTo('App\keluar','id_keluar','id');
		}

}
