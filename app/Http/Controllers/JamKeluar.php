<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Keluar;
use Auth;
use DB;

class JamKeluar extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */

public function __construct()
  {
      $this->middleware('auth');
  }
  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Http\Response
   */
  public function timeZone($location){
      return date_default_timezone_set($location);
  }
  public function index(){
  $this->timeZone('Asia/Jakarta');
  $user_id= Auth::user()->id;
  $date = date("Y-m-d");
  $time = date("H:i:s");
  $cek_absen = Keluar::where(['user_id'=>$user_id,'tanggal_masuk'=>$date])->get()->first();
  $data_absen =Keluar::where('user_id',$user_id)->orderBy('jam_keluar','desc')->paginate(20);
  return view('keluar.index',compact('data_absen','info'));
}
public function keluar(Request $request){
    $this->timeZone('Asia/Jakarta');
    $user_id = Auth::user()->id;
    $date=date("Y-m-d");
    $time=date("H:i:s");
    $keterangan = $request->keterangan;
    $keluar = new \App\Keluar;
    //keluar
    if(isset($request->btnOut)){

        $cek_double=$keluar->where(['tanggal_masuk'=>$date,'user_id'=>$user_id])->count();

        if($cek_double >0){
            return redirect()->back();
        }
        $keluar->user_id=$user_id;
        $keluar->tanggal_masuk=$date;
        $keluar->jam_keluar=$time;
        $keluar->keterangan=$keterangan;
        $keluar->save();
        return redirect()->back();
    }
    //keluar
    return $request->all();

}
public function daftar(){
    $keluar = \App\Keluar::all();
    //$x =DB::table('user')->get();
    return view('keluar.daftar_keluar', compact('keluar'));
}
}
