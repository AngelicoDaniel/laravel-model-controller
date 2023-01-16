@extends('layouts.app')

@section('page-title', 'movies')

@section('main-content')
    <h1>Movies:</h1>
    {{-- insert movies from db --}}
    @foreach ($movies as $elem)
        <h2>{{$elem['title']}}</h2>
    @endforeach
@endsection