@extends('layouts.master')
@section('content')
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel">	
<div class="panel-heading">
	<h3 class="panel-title">Data Guru</h3>
	<div class="right">
	<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i></button>
	</div>
</div>
<div class="panel-body">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>NAMA</th>
		<th>KELAS</th>
		<th>JURUSAN</th>
		<th>PELAJARAN</th>
		<th>BENAR</th>
		<th>SALAH</th>
		<th>HASIL</th>
	</tr>
	</thead>
	<tbody>
	@foreach($data_hasil as $hasil)
		<tr>
			<td>{{$hasil->nama}}</a></td>
			<td>{{$hasil->kelas}}</td>
			<td>{{$hasil->jurusan}}</td>
			<td>{{$hasil->mapel}}</td>
			<td>{{$hasil->benar}}</td>
			<td>{{$hasil->salah}}</td>
			<td>{{$hasil->hasil}}</tdhasil>
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
</div>
@stop