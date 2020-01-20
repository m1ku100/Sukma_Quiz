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
							<form action="/mapel/{{$mapel->id}}/update" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
				<div class="form-group">
				 <label for="exampleInputEmail1">Kode</label>
				  <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$mapel->kode}}">
				</div>
		<div class="form-group">
		 <label for="exampleInputEmail1">Nama</label>
		  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$mapel->nama}}">
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$mapel->jurusan}}">
			<option value="IPA" @if($mapel->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($mapel->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($mapel->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
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
		<form action="/mapel/{{$mapel->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="form-group">
				 <label for="exampleInputEmail1">Kode</label>
				  <input name="kode" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$mapel->kode}}">
				</div>
		<div class="form-group">
		 <label for="exampleInputEmail1">Nama</label>
		  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$mapel->nama}}">
		</div>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$mapel->jurusan}}">
			<option value="IPA" @if($mapel->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($mapel->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($mapel->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
		</div>
		 <button type="submit" class="btn btn-warning">Update</button>
		</form>
	</div>
		</div>
@endsection
