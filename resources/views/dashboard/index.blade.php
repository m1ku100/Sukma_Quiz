@extends('layouts.master')
@section('content')
    <div class="main">
        <div class="main-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        @if(auth()->user()->role=='siswa')
                            <form class="navbar-form navbar-left" action="{{route('show.quiz')}}" method="post">
                                {{csrf_field()}}
                                <div class="input-group">
                                    <input name="token" type="text" class="form-control"
                                           placeholder="Masukkan Kode Ujian" required>
                                    <span class="input-group-btn">
                                        <button type="submit" class="btn btn-primary">Go</button>
                                    </span>
                                </div>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@push('scripts')
    <script>
        @if(session('warning'))
        swal('PERHATIAN!', '{{session('warning')}}', 'warning');
        @endif
    </script>
@endpush
