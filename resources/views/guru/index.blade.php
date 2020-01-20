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
	<button type="button" class="btn" data-toggle="modal" data-target="#exampleModal"><i class="lnr lnr-plus-circle"></i> <p> Tambah Data Guru </button>
	</div>
</div>
<div class="panel-body">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>NAMA</th>
		<th>JENIS KELAMIN</th>
		<th>PELAJARAN</th>
		<th>JURUSAN</th>
		<th>ALAMAT</th>
		<th>Aksi</th>
	</tr>
	</thead>
	<tbody>
	@foreach($data_guru as $guru)
		<tr>
			<td><a href="/guru/{{$guru->id}}/profile">{{$guru->nama}}</a></td>
			<td>{{$guru->jenis_kelamin}}</td>
			<td>{{$guru->pelajaran}}</td>
			<td>{{$guru->jurusan}}</td>
			<td>{{$guru->alamat}}</td>
			<td>
			<a href="/guru/{{$guru->id}}/edit" class="btn btn-warning btn-sm">Edit</a>
			<a href="/guru/{{$guru->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau dihapus?')">Delete</a>
			</td>
			</tr>
	@endforeach
	</tbody>
	</table>
	{{$data_guru->links()}}
</div>
</div>
</div>
</div>
</div>
</div>
</div>


</div>
<div class="modal fade" id="importGuru" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
		<h5 class="modal-title" id="exampleModalLabel">TAMBAH DATA GURU</h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<div class="modal-body">
	<form action="/guru/create" method="POST">
		{{csrf_field()}}
	<div class="form-group">
		<label for="exampleInputEmail1">Nama</label>
		<input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Email</label>
		<input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Password</label>
		<input name="password" type="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Password">
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Pilih Jenis Kelamin</label>
		<select name="jenis_kelamin" class="form-control" id="exampleFormControlSelect1">>
			<option>Laki-Laki</option>
			<option>Perempuan</option>
		</select>
	</div>
	<div class="form-group">
		<label for="exampleInputEmail1">Pelajaran</label>
		<input name="pelajaran" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama">
	</div>
	<div class="form-group">
		<label for="exampleFormControlSelect1">Pilih Jurusan</label>
		<select name="jurusan" class="form-control" id="exampleFormControlSelect1">>
			<option>IPA</option>
			<option>IPS</option>
			<option>AGAMA</option>
		</select>
	<div class="form-group">
		<label for="exampleFormControlTextarea1">Alamat</label>
		<textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-secondary" data-dismiss="modal"> Close </button>
	<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</div>
</div>
</div>

@stop
