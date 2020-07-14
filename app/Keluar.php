<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keluar extends Model
{
  protected $table = 'keluar';
  protected $fillable =['user_id','tanggal_masuk','jam_masuk','jam_keluar','keterangan'];
  public function user(){
    return $this->belongsTo('App\user','user_id','id');
  }
  protected function absen(){
      return $this->hasOne(Absen::class);
  }
}
