@extends('layouts.master')
@section('content')
@extends('layouts.master')
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="col-md-12">
<div class="row">
<form method="post" action="{{ url('kerjakan/selesai/') }}">
		 {{csrf_field()}}

		<td>Terimakasih :)</td>
				<input type="hidden" name="id_siswa" class="form-control" value="{{$siswa}}"/>
				<input type="hidden" name="id_mapel" class="form-control" value="{{$id_mapel}}" />
				<td>Nilai anda sebesar :{{$nilaiHasil}}</td>
<p>&nbsp</p>
				<input type="hidden" name="nilai" class="form-control" value="{{$nilaiHasil}}" />
				<input type="hidden" name="token" class="form-control" value="{{$token}}" />

				<button type="submit" class="btn btn-primary">
					Back To Dashboard
				</button>
			</form>
	<div></div>
	

</div>
</div>
</div>
</div>
</div>
@stop

@stop
