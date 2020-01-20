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
	<div class="col-md-4">
		<p id="demo"></p>
	</div>
</div>

<div class="panel-body">


	<tbody>

		<?php $no=0; 
//dd($data_soal_kerjakan);
		?>

@foreach($data_soal_kerjakan as $soal) 
<?php $no++ ;?>
	<tr>
<br>
		<td>{{$soal->nomer}}</td>
		<td>{{$soal->soal}}</td>

		<br>
		<br>
 <form action="{{ url('kerjakan/soal_kerjakan/') }}" METHOD="POST" >
	 {{csrf_field()}}
<!-- <input type="text" name="menit" value="id="demo"> -->
<input type="hidden" name="soal" value="{{$soal->soal}}">
<input type="hidden" name="nomer" value="{{$soal->nomer}}">
<input type="hidden" name="id_mapel" value="{{$soal->id_mapel}}">
<input type="hidden" name="soal_id" value="{{$soal->id}}">
<input type="hidden" name="kunci_jawaban" value="{{$soal->kunci_jawaban}}">
<input type="hidden" name="skor" value="{{$soal->skor}}">
<input type="hidden" name="warna" value="btn-success">

<input type="radio" name="jawaban" value="A">{{ $soal->pilihan_a}}<br>
<input type="radio" name="jawaban" value="B">{{ $soal->pilihan_b}}<br>
<input type="radio" name="jawaban" value="C">{{ $soal->pilihan_c}}<br>
<input type="radio" name="jawaban" value="D">{{ $soal->pilihan_d}}<br>
<input type="radio" name="jawaban" value="E">{{ $soal->pilihan_e}}<br>

			</tr>
			<br>
	
@endforeach
@foreach($data_siswa as $siswa)

	<input type="hidden" name="id_siswa" value="{{$siswa->id}}"/>
@endforeach
@foreach($updatesoal as $upsoal)
<input type="hidden" name="id" value="{{$upsoal->id}}"/>
<input type="hidden" name="token" value="{{$upsoal->token}}"/>
@endforeach
<p id="menit1"></p>
<input type="hidden" name="minutes" id="minutes" onload="document.getElementById('menit1').innerHTML = document.getElementById('minutes').value" value="menit">

</tbody>
			<button type="submit" class="btn btn-primary" name="simpan" value="Submit" onclick="assignDuration()">
				{{$tombol1}}</button>
<button {{$tombol}} class="btn btn-primary" value="back"name="back">Back</button>

</div>
</div>
</div>
<div class="col-md-4">
	<div class="panel">
		<div class="panel-heading">
	<h3 class="panel-title"> Button Soal </h3>

</div>
<div class="panel-body">

@foreach($data_soal_kerjakan1 as $soal1)
	<th><button type="submit" class="btn {{$soal1->warna}}" data-toggle="modal" name="soalpinggir" value="{{$soal1->nomer}}">{{$soal1->nomer}}</button></th>
@endforeach
</div>
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
</ div>

</div>




<script>	

// Get today's date and time
var mulai = new Date().getTime();
// Set the date we're counting down to
var countDownDate = new Date({{$data_token->durasi}}*60000).getTime();

console.log(countDownDate);
// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
var now = new Date().getTime();
  // Find the distance between now and the count down date
var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";
document.getElementById("menit").innerHTML = distance ;

		console.log(minutes);
  
  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";

    document.getElementById("minutes").innerHTML = "EXPIRED";
    document.send(minutes);
  }
}, 1000);

</script>

@stop
