<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body style="background-color: #E0FFFF;">
	<nav class="navbar navbar-light navbar-expand-lg navbar-ligh" style="background-color:#98FB98;">
		<a class="navbar-brand" href="#">SIABPEG</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
	<div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav mr-auto">
			@if(auth()->user()->role=='admin')
      <li class="nav-item">
        <a class="nav-link" href="/pegawai">Daftar Pegawai</a>
      </li>
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Daftar Absensi
        </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="/absensi/daftar">Absensi Masuk</a>
          <a class="dropdown-item" href="/keluar/daftar">Absensi Pulang</a>
        </div>
      </li>
			@endif
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Absen
        </a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink2">
          <a class="dropdown-item" href="/absensi">Time In</a>
          <a class="dropdown-item" href="/keluar">Time Out</a>
        </div>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="/changePassword">Ganti Password</a>
      </li>
      <li class="nav-item"><a class="nav-link"href="/logout"><span>Logout</span></a></li>
  </ul>
	@if(auth()->user()->role=='admin')
	<form class="form-inline my-2 my-lg-0" method="GET" action="/pegawai">
		<input name="cari" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		<button class="btn btn-outline-success btn-sm" type="submit">Search</button>
	</form>
	@endif
  </div>
</nav>
	<div class="container">
		<div class="mt-4">
		@yield('content')
	</div>
</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
