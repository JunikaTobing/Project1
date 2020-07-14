@extends('layouts.master')

@section('content')
<div class="card-header"><b><i>Daftar Absen Pulang</i></b></div>
<div class="card-body">
<table class="table table-hover table-sm">
		<tr>
			<th>NIP</th>
			<th>Tanggal Masuk</th>
			<th>Jam Masuk</th>
			<th>Keterangan</th>
		</tr>
		@foreach($absensi as $absensi)
		<tr>
			<td>{{isset($absensi->user->nip)? ucfirst($absensi->user->nip):''}}</td>
			<td>{{$absensi->tanggal_masuk}}</td>
			<td>{{$absensi->jam_masuk}}</td>
			<td>{{$absensi->keterangan}}</td>
		</tr>
		@endforeach
	</table>
	</div>

	</div>

	@endsection
