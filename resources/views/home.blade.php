@extends('layouts/main-layout')

@section('content')

    <div class="link-movie">
        <a href="{{route('index')}}">Clicca qui e scopri i tuoi film</a>
    </div>

    <div class="home-img">
        <img src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="img">
    </div>
    
@endsection