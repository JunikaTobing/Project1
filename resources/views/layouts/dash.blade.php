<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
			@if(auth()->user()->role=='admin')
      <li class="nav-item">
        <a class="nav-link" href="/pegawai">Daftar Pegawai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/absensi/daftar">Absensi Masuk</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="/keluar/daftar">Absensi Pulang</a>
      </li>
			@endif
      <li class="nav-item">
        <a class="nav-link" href="/absensi">Absen Masuk</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="/keluar">Absen Keluar</a>
      </li>
			<li class="nav-item">
        <a class="nav-link" href="/changePassword">Change Password</a>
      </li>

      <li class="nav-item"><a class="nav-link"href="/logout"><span>Logout</span></a></li>
  </ul>
  </div>
</nav>
	<div class=container>
		@yield('content')
</div>
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>
