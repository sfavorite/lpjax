@extends('layouts.master')

@section('content')

@include('nav', ['active' => 'home'])

    <div class='container'>
        <div class="wide">
        </div>
    </div>


    <div>
        <div class="text-center my">
            <h1>{{ $text }}</h1>
        </div>
    </div>

    <div id='main'>
        @include('random')
    </div>

@endsection
