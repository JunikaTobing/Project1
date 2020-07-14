<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class PegawaiController extends Controller
{
    public function index(Request $request){
      if($request->has('cari')){
    		$pegawai= \App\pegawai::where('nama','LIKE','%'.$request->cari.'%')->get();
    	}else{
    		$pegawai = \App\pegawai::all();
    	}
    	return view('pegawai.index',['pegawai'=> $pegawai ]);
    	$pegawai = \App\pegawai::all();
    	return view('pegawai.index', compact('pegawai'));
    }
    public function create(Request $request){
    	//insert user
		$user = new \App\user;
    	$user->role=$request->role;
    	$user->name = $request->nama;
    	$user->nip = $request->nip;
    	$user->email=$request->email;
    	$user->password= bcrypt('12345');
    	$user->remember_token = str_random(60);
    	$user->save();
    	//insert pegawai
    	$request->request->add(['user_id'=> $user->id]);
    	$pegawai=\App\pegawai::create($request->all());
    	return redirect('/pegawai');
    }
    public function edit($id){
    	$pegawai=\App\pegawai::find($id);
    	//dd($pegawai);
    	return view('pegawai/edit',['pegawai'=>$pegawai]);

    }
    public function update(Request $request,$id){
    	$pegawai=\App\pegawai::find($id);
    	//dd($pegawai);
    	$pegawai->update($request->all());
    	return redirect('/pegawai')->with('berhasil','Data berhasil diupdate');
    }
    public function delete($id){
	$pegawai = \App\pegawai::find($id);
	$pegawai->delete($pegawai);
	return redirect('/pegawai')->with('berhasil', 'Data Berhasil Dihapus');

}

}
