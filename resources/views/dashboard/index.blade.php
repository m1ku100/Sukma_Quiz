@extends('layouts.master')
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="col-md-12">
<div class="row">

@if(auth()->user()->role=='siswa')
	<form class="navbar-form navbar-left" action="/kerjakan" method="get">
		{{csrf_field()}}
						<div class="input-group">
							<input name="token" type="text" value="" class="form-control" placeholder="Masukkan Nomor Token Ujian">
							<span class="input-group-btn">
									<button type="submit" class="btn btn-primary">Go</button>
									</span>

					</form>
					@endif


</div>
</div>
</div>
</div>
</div>
@stop
