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
	<h3 class="panel-title">Data Soal</h3>
	<div class="right">
	<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i> <p> Tambah Data Siswa </button>
</div>
<div class="panel-body">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>ID Mapel</th>
		<th>Kelas</th>
		<th>Jurusan</th>
		<th>Soal</th>
		<th>Tingkatan</th>
		<th>A</th>
		<th>B</th>
		<th>C</th>
		<th>D</th>
		<th>E</th>
		<th>Kunci Jawaban</th>
		<th>Skor</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	@foreach($data_soal as $soal)
		<tr>
			<td>{{$soal->id_mapel}}</td>
			<td>{{$soal->kelas}}</td>
			<td>{{$soal->jurusan}}</td>
			<td>{{$soal->soal}}</td>
			<td>{{$soal->tingkatan}}</td>
			<td>{{$soal->pilihan_a}}</td>
			<td>{{$soal->pilihan_b}}</td>
			<td>{{$soal->pilihan_c}}</td>
			<td>{{$soal->pilihan_d}}</td>
			<td>{{$soal->pilihan_e}}</td>
			<td>{{$soal->kunci_jawaban}}</td>
			<td>{{$soal->skor}}</td>
			<td>
			<a href="/soal/{{$soal->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/soal/{{$soal->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
			</td>
			</tr>
	@endforeach
	</tbody>
	</table>
	{{$data_soal->links()}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- Modal Import Soal-->
<div class="modal fade" id="importSoal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

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
	<form action="/soal/create" method="POST">
		{{csrf_field()}}
		<div class="form-group">
		 <label for="exampleFormControlTextarea1">ID MApel</label>
		 <textarea name="id_mapel" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Pilih Kelas</label>
		<select name="kelas" class="form-control" id="exampleFormControlSelect1">
			<option>10</option>
			<option>11</option>
			<option>12</option>
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
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Soal</label>
		<textarea name="soal" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Tingkatan</label>
		<select name="tingkatan" class="form-control" id="exampleFormControlSelect1">
			<option>SUSAH</option>
			<option>SEDANG</option>
			<option>MUDAH</option>
		</select>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">A</label>
		<textarea name="pilihan_a" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">B</label>
		<textarea name="pilihan_b" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">C</label>
		<textarea name="pilihan_c" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">D</label>
		<textarea name="pilihan_d" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">E</label>
		<textarea name="pilihan_e" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Kunci Jawaban</label>
		<textarea name="kunci_jawaban" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Skor</label>
		<textarea name="skor" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
	<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>
</div>
@stop
