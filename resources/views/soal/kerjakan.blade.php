@extends('layouts.master')
@section('content')

<div class="main">
<div class="main-content">
<div class="container-fluid">
<div class="row">
<div class="col-md-8">
<div class="panel">
<div class="panel-heading">
	<h3 class="panel-title"> Kerjakan </h3>
</div>

<div class="panel-body">

	<tbody>
		<?php $no=0; ?>
@foreach($data_soal as $soal)
<?php $no++ ;?>
	<tr>
 <FORM ACTION="/kerjakan/soal_kerjakan" METHOD="post" >
	 {{csrf_field()}}
<input type="hidden" name="soal[]" value="{{$soal->soal}}"></td>
<input type="hidden" name="no[]" value="{{$no}}">
<input type="hidden" name="id_mapel[]" value="{{$soal->id_mapel}}">
<input type="hidden" name="skor[]" value="{{$soal->skor}}">
<input type="hidden" name="soal_id[]" value="{{$soal->id}}">
<input type="hidden" name="kunci_jawaban[]" value="{{$soal->kunci_jawaban}}">
</tr>
	@endforeach

	@foreach($data_siswa as $siswa)
	<input type="hidden" name="id_siswa" value="{{$siswa->id}}"/>
	@endforeach
	@foreach($data_token as $token)
	<input type="hidden" name="token" value="{{$token->token}}"/>
	<input type="hidden" name="jumlah" value="{{$token->jumlah_soal}}"/>
	@endforeach
	<input type="submit" value="Mulai" class="panel-title">
	</tbody>


	<p>

</form>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

</div>
@stop
