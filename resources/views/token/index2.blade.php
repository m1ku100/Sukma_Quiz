@extends('layouts.master')
@section('content')
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading">
	<h3 class="panel-title">Token Ujian</h3>
	<div class="right">
	<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i>
	<p> Buat Token</p> </button>
	</div>
</div>
<div class="panel-body">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>User</th>
		<th>Mapel</th>
		<th>Nama Ujian</th>
		<th>Durasi</th>
		<th>Tanggal Ujian</th>
		<th>Jumlah Soal</th>
		<th>Token</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	
		<tr>
	@foreach($data_token as $token)
			<td>{{$token->user}}</td>
			<td>{{$token->id_mapel}}</td>
			<td>{{$token->nama_ujian}}</td>
			<td>{{$token->durasi}}</td>
			<td>{{$token->tanggal_mulai}}</td>
			<td>{{$token->jumlah_soal}}</td>
			<td>{{$token->token}}</td>
			<td>
			<a href="/token/{{$token->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/token/{{$token->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
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
	<form action="/token/create" method="POST">
		{{csrf_field()}}
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Nama Ujian</label>
		<textarea name="nama_ujian" class="form-control" id="exampleFormControlTextarea1"></textarea>
	</div>
	<div class="form-group">
	
		<label for="exampleFormControlTextarea1">Mapel</label>
	
		<select>
			@foreach($mapel as $map)
			<option value="{{$map->id}}">{{$map->nama}}</option>
			
		@endforeach
		</select>
	</div>
	<div class="form-group">
	@foreach($guru as $gur)
		<label for="exampleFormControlTextarea1">User</label>
		<input type="hidden" name="user" class="form-control" id="exampleFormControlTextarea1" value="{{$gur->nama}}"/>
		<input name="nama" class="form-control" id="exampleFormControlTextarea1" value="{{$gur->nama}}"/>
		@endforeach
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Durasi</label>
		<textarea name="durasi" class="form-control" id="exampleFormControlTextarea1"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Tanggal Ujian</label>
		<input type="date" name="tanggal_mulai" class="form-control" id="exampleFormControlTextarea1" />
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Jumlah Soal</label>
		<textarea name="jumlah_soal" class="form-control" id="exampleFormControlTextarea1"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Token</label>
		<?php
$n=8;
function getName($n) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';

    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }

    return $randomString;
}


?>
		<textarea name="token" class="form-control" readonly id="exampleFormControlTextarea1"><?php echo getName($n); ?></textarea>
	</div>

<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>
@stop
