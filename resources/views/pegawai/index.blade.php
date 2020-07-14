@extends('layouts.master')

@section('content')

		<div class="row">

					<!-- Button trigger modal -->
		<!-- Modal -->
		<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Data Pegawai</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
		      </div>
		      <div class="modal-body">
	<form action="/pegawai/create" method="POST">
		{{csrf_field()}}
 	 <div class="form-group">

    <label for="exampleInputEmail1">Nama</label>
    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" >
</div>
 <div class="form-group">

    <label for="exampleInputEmail1">NIP</label>
    <input name="nip" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Lengkap" >
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="email" >
</div>

	<div class="form-group">
    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>
</div>
<div class="form-group">

	 <label for="exampleInputEmail1">Role</label>
	 <select name="role" class="form-control" id="exampleFormControlSelect1">
		 <option value="admin">Admin</option>
		 <option value="pegawai">Pegawai</option>
	 </select>
</div>
<div class="form-group">
    <label for="exampleFormControlSelect1">Agama</label>
    <select name="agama" class="form-control" id="exampleFormControlSelect1" >
      <option>Islam</option>
      <option>Budha</option>
      <option>Hindu</option>
      <option>Kristen Katolik</option>
      <option>Kristen Protestan</option>
      <option>Konghucu</option>
    </select>
    </div>
     <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat Lengkap</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3" ></textarea>
</div>
 <div class="form-group">
<label for="masuk_kerja">Masuk Kerja</label>
  <input type="date" id="masuk_kerja" name="masuk_kerja">
</div>
<div class="modal-footer">
		        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        <button type="submit" class="btn btn-primary">Submit</button>
</form>
 </div>
		      </div>
		    </div>
		  </div>
		</div>
	</div>
	<div class="card-header"><b><i>Daftar Pegawai</i></b>
</div>
	<div class="card-body">
		<div class="col-12">
		<button type="button" class="btn btn-primary btn-sm float-right mb-3" data-toggle="modal" data-target="#exampleModal">
				Tambah Pegawai
			</button>
		</div>
	<table class="table table-hover table-sm">
		<tr>
			<th>NAMA</th>
			<th>JENIS KELAMIN</th>
			<th>AGAMA</th>
			<th>ALAMAT</th>
			<th>EMAIL</th>
			<th>MASUK KERJA</th>
			<th>AKSI</th>
		</tr>
		@foreach($pegawai as $pegawai)
		<tr>
			<td>{{$pegawai->nama}}</td>
			<td>{{$pegawai->jenis_kelamin}}</td>
			<td>{{$pegawai->agama}}</td>
			<td>{{$pegawai->alamat}}</td>
			<td>{{isset($pegawai->user->email)?ucfirst($pegawai->user->email):''}}</td>
			<td>{{$pegawai->masuk_kerja}}</td>
			<td>
				<a href="/pegawai/{{$pegawai->id}}/edit" class="btn btn-warning btn-sm
				">Edit</a>
				<a href="/pegawai/{{$pegawai->id}}/delete"class="btn btn-danger btn-sm" onclick="return confirm("Konfirmasi hapus data")" >Delete</a>
			</td>
		</tr>
		@endforeach
	</table>
		</div>

	</div>

	@endsection
