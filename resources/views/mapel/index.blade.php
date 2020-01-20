@extends('layouts.master')
@section('content')
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel">	
<div class="panel-heading">
	<h3 class="panel-title">Data Mata Pelajaran</h3>
	<div class="right">
	<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
	<p> Tambah Mata Pelajaran </p> </button>
	</div>
</div>
<div class="panel-body">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>Kode</th>
		<th>Nama</th>
		<th>Semester</th>
		<th>jurusan</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	@foreach($data_mapel as $mapel)
		<tr>
			<td>{{$mapel->kode}}</td>
			<td>{{$mapel->nama}}</td>
			<td>{{$mapel->semester}}</td>
			<td>{{$mapel->jurusan}}</td>
			<td>
			<a href="/mapel/{{$mapel->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/mapel/{{$mapel->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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
	<form action="/mapel/create" method="POST">
		{{csrf_field()}}
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Kode</label>
		<textarea name="kode" class="form-control" id="exampleFormControlTextarea1"></textarea>
	</div>	
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Nama</label>
		<textarea name="nama" class="form-control" id="exampleFormControlTextarea1"></textarea>
	</div>	
	<div class="form-group">
		<label for="exampleFormControlSelect1">Pilih Semester</label>
		<select name="semester" class="form-control" id="exampleFormControlSelect1">
			<option>GANJIL</option>
			<option>Genap</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Pilih Jurusan</label>
		<select name="jurusan" class="form-control" id="exampleFormControlSelect1">
			<option>IPA</option>
			<option>IPS</option>
			<option>AGAMA</option>
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