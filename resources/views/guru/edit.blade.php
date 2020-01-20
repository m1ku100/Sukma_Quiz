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
							<form action="/guru{$guru->id}}/update" method="POST">
				{{csrf_field()}}
		<div class="form-group">
		 <label for="exampleInputEmail1">Nama</label>
		  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$guru->nama}}">
		</div>
		<div class="form-group">
		<label for="exampleFormControlSelect1">Jenis Kelamin</label>
		 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			<option value="Laki-Laki" @if($guru->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>guru		<option value="Perempuan" @if($guru->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">pelajaran</label>
		 <select name="pelajaran" class="form-control" id="exampleFormControlSelect1"value="{{$guru->pelajaran}}">
			<option value="10" @if($guru->pelajaran == "Matematika") selected @endif >Matematika</option>
			<option value="11" @if($guru->pelajaran == "Bahasa Indonesia") selected @endif >Bahasa Indonesia</option>
			<option value="12" @if($guru->pelajaran == "Bahasa Ingris") selected @endif >Bahasa Ingris</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$guru->jurusan}}">
			<option value="IPA" @if($guru->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($guru->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($guru->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
		</div>							
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Alamat</label>
		 <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"{{$guru->alamat}}"></textarea>
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
			<h1>Edit Data Guru</h1>
			@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  				{{session('sukses')}}
		</div>
			@endif
		<div class="row">
			<div class="col-lg-12">
		<form action="/guru{{$guru->id}}/update" method="POST">
				{{csrf_field()}}
		<div class="form-group">
		 <label for="exampleInputEmail1">Nama</label>
		  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$guru->nama}}">
		</div>
		<div class="form-group">
		<label for="exampleFormControlSelect1">Jenis Kelamin</label>
		 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			<option value="Laki-Laki" @if($guru->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
			<option value="Perempuan" @if($guru->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Pelajaran</label>
		 <select name="pelajaran" class="form-control" id="exampleFormControlSelect1"value="{{$guru->pelajaran}}">
			<option value="10" @if($guru->pelajaran == "Matematika") selected @endif >Matematika</option>
			<option value="11" @if($guru->pelajaran == "Bahasa Indonesia") selected @endif >Bahasa Indonesia</option>
			<option value="12" @if($guru->pelajaran == "Bahasa Inggris") selected @endif >Bahasa Ingris</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$guru->jurusan}}">
			<option value="IPA" @if($guru->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($guru->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($guru->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
		</div>							
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Alamat</label>
		 <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"{{$guru->alamat}}"></textarea>
		</div>
		 <button type="submit" class="btn btn-warning">Update</button>
		</form>
	</div>
		</div>
@endsection