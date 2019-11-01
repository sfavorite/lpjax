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

    <div class="offset-2 col-8" id='main'>
        <p>
            This is a Laravel - Pjax demo application. It shows how to integerate Pjax with Laravel.
            When you click the 'number' or 'picture' links on the first page only the number or picture changes
            and the pages is not refreshed!
        </p>
    </div>

@endsection
