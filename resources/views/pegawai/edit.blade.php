@extends('layouts.master')

@section('content')
    <h1>Edit Data Pegawai</h1>
    <div class="row">
      <div class="col-lg-12">
      <form action="/pegawai/{{$pegawai -> id}}/update" method="POST">
      {{csrf_field()}}
       <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" value="{{$pegawai->nama}}">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">NIP</label>
    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NIP" value="{{isset($pegawai->user->nip)?ucfirst($pegawai->user->nip):''}}">
</div>
<div class="form-group">

    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email"value="{{isset($pegawai->user->email)?ucfirst($pegawai->user->email):''}}" >
</div>

  <div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L" @if($pegawai-> jenis_kelamin =='L') selected @endif>Laki-laki</option>
      <option value="P" @if($pegawai-> jenis_kelamin =='P') selected @endif>Perempuan</option>
    </select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Agama</label>
    <select name="agama" class="form-control" id="exampleFormControlSelect1" value="{{$pegawai->agama}}">
      <option value="Islam" @if($pegawai-> agama =='Islam') selected @endif>Islam</option>
      <option value="Budha" @if($pegawai-> agama =='Budha') selected @endif>Budha</option>
      <option value="Hindu" @if($pegawai-> agama =='Hindu') selected @endif>Hindu</option>
      <option value="Kristen Katolik" @if($pegawai-> agama =='Kristen Katolik') selected @endif>Kristen Katolik</option>
      <option value="Kristen Protestan" @if($pegawai-> agama =='Kristen Protestan') selected @endif>Kristen Protestan</option>
      <option value="Konghucu" @if($pegawai-> agama =='Konghucu') selected @endif>Konghucu</option>
    </select>
    </div>
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pegawai->alamat}}</textarea>
</div>
 <div class="form-group">
<label for="masuk_kerja">Masuk Kerja</label>
  <input type="date" id="masuk_kerja" name="masuk_kerja"value="{{$pegawai->masuk_kerja}}">
</div>
<div class="modal-footer">
            <button type="submit" class="btn btn-warning">Update</button>
</form>
</div>
  </div>

@endsection
