<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Absensi;
use Auth;
use DB;

class AbsensiController extends Controller
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
        $cek_absen = Absensi::where(['user_id'=>$user_id,'tanggal_masuk'=>$date])->get()->first();
        $data_absen = Absensi::where('user_id',$user_id)->orderBy('jam_keluar','desc')->paginate(20);
        return view('absensi.index',compact('data_absen','info'));
    }
    public function absen(Request $request){
        $this->timeZone('Asia/Jakarta');
        $user_id = Auth::user()->id;
        $date=date("Y-m-d");
        $time=date("H:i:s");
        $keterangan = $request->keterangan;
        $absensi = new \App\Absensi;
        //masuk
        if(isset($request->btnIn)){

            $cek_double=$absensi->where(['tanggal_masuk'=>$date,'user_id'=>$user_id])->count();

            if($cek_double >0){
                return redirect()->back();
            }
            $absensi->user_id=$user_id;
            $absensi->tanggal_masuk=$date;
            $absensi->jam_masuk=$time;
            $absensi->keterangan=$keterangan;
            $absensi->save();
            return redirect()->back();
        }
        //keluar
        return $request->all();

    }
    public function daftar(){
        $absensi = \App\Absensi::all();
        //$x =DB::table('user')->get();
        return view('absensi.daftar_absen', compact('absensi'));
    }
}
