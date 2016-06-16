@extends('layouts.master')

@section('content')

@include('nav', ['active' => 'about'])


    <div class='container'>
        <div class="wide">
            <div class="col-xs-5 line"><hr></div>
            <div class="col-xs-2 logo">Static</div>
            <div class="col-xs-5 line"><hr></div>
        </div>
    </div>


    <div>
        <div class="text-center my">
            <h1>{{ $text }}</h1>
        </div>
    </div>

    <div id='main'>
        This is a Laravel - Pjax demo application. It uses a nav bar and links to show how to integerate Pjax with Laravel.
    </div>

@endsection
