@extends('layout')

@section('content')
    <div class="row">
        <div class="col-3">
            common sidebar
        </div>

        <div class="col-9">
            @yield('main_content')
        </div>
    </div>

@endsection