@extends('layouts.master')

@section('content')

<div class="container mt-5">
<div class="row justify-content-center">
  <div class="col-md-8">
  <div class="card">
  <div class="card-header">Absen Pulang</div>
  <div class="card-body">
                    <table class="table table-responsive">
                        <form action="/keluar/keluar" method="post">
                            {{csrf_field()}}
                            <tr>
                                <td>
                                    <button type="submit" class="btn btn-flat btn-primary" name="btnOut" value="pulang">ABSEN KELUAR</button>
                                </td>
                                <td>
                                    <input name="keterangan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Keterangan" >
                                </td>
                            </tr>
                          </form>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>
