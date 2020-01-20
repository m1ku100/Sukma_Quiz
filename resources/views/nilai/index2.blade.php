@extends('layouts.master')

@section('content')
<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<div class="panel">
<div class="panel-heading">
	<h3 class="panel-title">Data Nilai Siswa</h3>

</div>
<div class="panel-body">
	<table class="table table-hover">
	<thead>
	<tr>
		<th>ID SISWA</th>
		<th>TOKEN</th>
		<th>ID MAPEL</th>
		<th>NILAI</th>
	</tr>
	</thead>
	<tbody>
	@foreach($data_nilai as $nilai)
		<tr>
			<td>{{App\Siswa::find($nilai->id_siswa)->name}}</td>
			<td>{{$nilai->token}}</td>
			<td>{{$nilai->id_mapel}}</td>
			<td>{{$nilai->nilai}}</td>			
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
</div>

@endsection
