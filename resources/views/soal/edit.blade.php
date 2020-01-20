@extends('layouts.master')
@section('content')
<style media="screen">
	.panel-body, .profile-right, .profile-left{
		padding-left: 12px | important;
		padding-left: 12px | important;
}
.img-circle{
	width:120px | important;
}
</style>
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
							<form action="/soal/{{$soal->id}}/update" method="POST">
				{{csrf_field()}}
				<div class="form-group">
				 <label for="exampleFormControlTextarea1">ID Mapel</label>
				 <textarea name="id_mapel" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->id_mapel}}</textarea>
				</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Kelas</label>
		 <select name="kelas" class="form-control" id="exampleFormControlSelect1"value="{{$soal->kelas}}">
			<option value="10" @if($soal->kelas == "10") selected @endif >10</option>
			<option value="11" @if($soal->kelas == "11") selected @endif >11</option>
			<option value="12" @if($soal->kelas == "12") selected @endif >12</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$soal->jurusan}}">
			<option value="IPA" @if($soal->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($soal->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($soal->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Soal</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->soal}}</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Tingkatan</label>
		 <select name="tingkatan" class="form-control" id="exampleFormControlSelect1"value="{{$soal->jurusan}}">
			<option value="SUSAH" @if($soal->tingkatan == "SUSAH") selected @endif >SUSAH</option>
			<option value="SEDANG" @if($soal->tingkatan == "SEDANG") selected @endif >SEDANG</option>
			<option value="MUDAH" @if($soal->tingkatan == "MUDAH") selected @endif >MUDAH</option>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan A</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_a}}"</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan B</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_b}}"</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan C</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_c}}"</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan D</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_d}}"</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan E</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_e}}"</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Kunci Jawaban</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->kunci_jawaban}}"</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Skor</label>
		 <textarea name="skor" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->Skor}}"</textarea>
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
			<h1>Edit Data soal</h1>
			@if(session('sukses'))
		<div class="alert alert-success" role="alert">
  				{{session('sukses')}}
		</div>
			@endif
		<div class="row">
			<div class="col-lg-12">
		<form action="/soal/{{$soal->id}}/update" method="POST">
				{{csrf_field()}}

				<div class="form-group">
				 <label for="exampleFormControlTextarea1">ID Mapel</label>
				 <textarea name="id_mapel" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->id_mapel}}</textarea>
				</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Kelas</label>
		 <select name="kelas" class="form-control" id="exampleFormControlSelect1"value="{{$soal->kelas}}">
			<option value="10" @if($soal->kelas == "10") selected @endif >10</option>
			<option value="11" @if($soal->kelas == "11") selected @endif >11</option>
			<option value="12" @if($soal->kelas == "12") selected @endif >12</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlSelect1">Jurusan</label>
		 <select name="jurusan" class="form-control" id="exampleFormControlSelect1"value="{{$soal->jurusan}}">
			<option value="IPA" @if($soal->jurusan == "IPA") selected @endif >IPA</option>
			<option value="IPS" @if($soal->jurusan == "IPS") selected @endif >IPS</option>
			<option value="AGAMA" @if($soal->jurusan == "AGAMA") selected @endif >AGAMA</option>
		 </select>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Soal</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->soal}}</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan A</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_a}}</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan B</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_b}}</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan C</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_c}}</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan D</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_d}}</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Pilihan E</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->pilihan_e}}</textarea>
		</div>
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">Kunci Jawaban</label>
		 <textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$soal->kunci_jawaban}}</textarea>
		</div>
		 <button type="submit" class="btn btn-warning">Update</button>
		</form>
	</div>
</div>

@endsection
