@extends('layouts/main-layout')

@section('content')

    <table class="table">
        <thead>
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Titolo</th>
              <th scope="col">Titolo originale</th>
              <th scope="col">Nazione</th>
              <th scope="col">Data</th>
              <th scope="col">Voto</th>
            </tr>
          </thead>
       
        <tbody>
            @foreach ($movies as $singleMovie)
            <tr>
                <th scope="row">{{$singleMovie->id}}</th>
                <td>{{$singleMovie->title}}</td>
                <td>{{$singleMovie->original_title}}</td>
                <td>{{$singleMovie->nationality}}</td>
                <td>{{$singleMovie->date}}</td>
                <td>{{$singleMovie->vote}}</td>
            </tr>
            @endforeach
         
        </tbody>
      </table>
    
@endsection