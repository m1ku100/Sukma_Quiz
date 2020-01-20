@extends('layouts.master')
@section('content')
<div class="main">
	<div class="main-content">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="panel">
						<div class="panel-heading">
							<h3 class="panel-title">Inputs</h3>
						</div>
						<div class="panel-body">
							<form action="/token/{{$token->id}}/update" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
				 <label for="exampleInputEmail1">Nama Ujian</label>
				  <input name="nama_ujian" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->mapel}}">
				</div>
				<div class="form-group">
				 <label for="exampleInputEmail1">User</label>
				  <input name="id_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->mapel}}">
				</div>
				<div class="form-group">
				 <label for="exampleInputEmail1">Mapel</label>
				  <input name="id_mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->mapel}}">
				</div>
		<div class="form-group">
		 <label for="exampleInputEmail1">Durasi</label>
		  <input name="durasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->durasi}}">
		</div>
		<div class="form-group">
				 <label for="exampleInputEmail1">Tanggal Ujian</label>
				  <input name="tanggal_mulai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->mapel}}">
				</div>
		<div class="form-group">
		 <label for="exampleInputEmail1">Jumlah Soal</label>
			<input name="jumlah_soal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->jumlah_soal}}">
		</div>
<div class="form-group">
 <label for="exampleInputEmail1">token</label>
	<input name="token" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->token}}">
</div>
		 <button type="submit" class="btn btn-warning">Update</button>
		</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
@stop
@section('content1')
			<h1>Edit Data Mata Pelajaran</h1>
			@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  				{{session('sukses')}}
		</div>
			@endif
		<div class="row">
			<div class="col-lg-12">
		<form action="/token/{{$token->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="form-group">
				 <label for="exampleInputEmail1">Mapel</label>
				  <input name="mapel" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->mapel}}">
				</div>
		<div class="form-group">
		 <label for="exampleInputEmail1">Durasi</label>
		  <input name="durasi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->durasi}}">
		</div>
		</div>
		<div class="form-group">
		 <label for="exampleInputEmail1">Jumlah Soal</label>
			<input name="jumlah_soal" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->jumlah_soal}}">
		</div>
<div class="form-group">
 <label for="exampleInputEmail1">Token</label>
	<input name="token" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$token->token}}">
</div>
</div>
		 <button type="submit" class="btn btn-warning">Update</button>
		</form>
	</div>
		</div>
@endsection
N
