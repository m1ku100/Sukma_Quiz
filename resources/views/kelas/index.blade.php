@extends('layouts.master')

@section('content')
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading">
	<h3 class="panel-title">Data Kelas</h3>

	<div class="right">
	<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i> <p> Tambah Data Kelas </button>
	</div>
</div>
<div class="panel-body">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>KODE</th>
		<th>NAMA</th>
		<th>JURUSAN</th>
		<th>RUANGAN</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	@foreach($data_kelas as $kelas)
		<tr>
			<td>{{$kelas->kode}}</a></td>
			<td>{{$kelas->nama}}</td>
			<td>{{$kelas->jurusan}}</td>
			<td>
			<a href="/kelas/{{$kelas->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/kelas/{{$kelas->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
			</td>
			</tr>
	@endforeach
	</tbody>
	</table>
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
<div class="modal fade" id="importKelas" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>


	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
	<div class="modal-content">
	<div class="modal-header">
		<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
	<form action="/kelas/create" method="POST">
		{{csrf_field()}}
	<div class="form-group">
		<label for="exampleInputEmail1">Kode</label>
		<input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kode">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Nama</label>
		<input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Pilih Jurusan</label>
		<select name="jurusan" class="form-control" id="exampleFormControlSelect1">>
			<option>IPA</option>
			<option>IPS</option>
			<option>AGAMA</option>
		</select>
</div>
<div class="form-group">
	<label for="exampleFormControlSelect1">Pilih Ruangan</label>
	<select name="ruangan" class="form-control" id="exampleFormControlSelect1">>
		<option>1</option>
		<option>2</option>
		<option>3</option>
	</select>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>

@stop
