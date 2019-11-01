@extends('layouts.master')

@section('content')


@include('nav', ['active' => 'about'])


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
        This is a Laravel - Pjax demo application. It uses a nav bar and links to show how to integerate Pjax with Laravel.
    </div>

@endsection
