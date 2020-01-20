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
							<form action="/siswa/{{$siswa->id}}/update" method="POST" enctype="multipart/form-data">
				{{csrf_field()}}
		<div class="form-group">
		 <label for="exampleInputEmail1">Nama</label>
		  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$siswa->nama}}">
		</div>
		<div class="form-group">
		<label for="exampleFormControlSelect1">Jenis Kelamin</label>
		 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			<option value="Laki-Laki" @if($siswa->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
			<option value="Perempuan" @if($siswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Kelas</label>
		 <select name="kelas" class="form-control" id="exampleFormControlSelect1"value="{{$siswa->kelas}}">
			<option value="10" @if($siswa->kelas == "10") selected @endif >10</option>
			<option value="11" @if($siswa->kelas == "11") selected @endif >11</option>
			<option value="12" @if($siswa->kelas == "12") selected @endif >12</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$siswa->jurusan}}">
			<option value="IPA" @if($siswa->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($siswa->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($siswa->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Alamat</label>
		 <input name="alamat" class="form-control" type="text" id="exampleFormControlTextarea1"  value="{{$siswa->alamat}}"></input>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Avatar</label>
		 <input type="file" name="avatar" class="form-control">
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
			<h1>Edit Data Siswa</h1>
			@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  				{{session('sukses')}}
		</div>
			@endif
		<div class="row">
			<div class="col-lg-12">
		<form action="/siswa/{{$siswa->id}}/update" method="POST">
				{{csrf_field()}}
		<div class="form-group">
		 <label for="exampleInputEmail1">Nama</label>
		  <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama" value="{{$siswa->nama}}">
		</div>
		<div class="form-group">
		<label for="exampleFormControlSelect1">Jenis Kelamin</label>
		 <select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">
			<option value="Laki-Laki" @if($siswa->jenis_kelamin == "Laki-Laki") selected @endif>Laki-Laki</option>
			<option value="Perempuan" @if($siswa->jenis_kelamin == "Perempuan") selected @endif>Perempuan</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Kelas</label>
		 <select name="kelas" class="form-control" id="exampleFormControlSelect1"value="{{$siswa->kelas}}">
			<option value="10" @if($siswa->kelas == "10") selected @endif >10</option>
			<option value="11" @if($siswa->kelas == "11") selected @endif >11</option>
			<option value="12" @if($siswa->kelas == "12") selected @endif >12</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$siswa->jurusan}}">
			<option value="IPA" @if($siswa->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($siswa->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($siswa->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Alamat</label>
		 <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"{{$siswa->alamat}}"></textarea>
		</div>
		 <button type="submit" class="btn btn-warning">Update</button>
		</form>
	</div>
		</div>
@endsection
