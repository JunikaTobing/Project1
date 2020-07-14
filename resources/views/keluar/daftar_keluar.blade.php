@extends('layouts.master')

@section('content')

<div class="card-header"><b><i>Daftar Absen Pulang</i></b></div>
<div class="card-body">
<table class="table table-hover table-sm">
		<tr>
			<th>NIP</th>
			<th>Tanggal Masuk</th>
			<th>Jam Keluar</th>
			<th>Keterangan</th>
		</tr>
		@foreach($keluar as $keluar)
		<tr>
			<td>{{isset($keluar->user->nip)? ucfirst($keluar->user->nip):''}}</td>
			<td>{{$keluar->tanggal_masuk}}</td>
			<td>{{$keluar->jam_keluar}}</td>
			<td>{{$keluar->keterangan}}</td>
		</tr>
		@endforeach
	</table>
	</div>
	</div>

	@endsection
