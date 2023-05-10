@extends('layouts/main-layout')

@section('content')
    <ul>
        @foreach ($movies as $singleMovie)
        <li>
            {{singleMovie->title}}
        </li>
        
        @endforeach
    </ul>
    
@endsection