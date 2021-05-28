@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <h2>{{$match -> team1}} VS {{$match -> team2}} <a href="{{route('edit', $match -> id)}}">
            &#9998;
        </a></h2>
        <h3>Punteggio: {{$match -> point1}} - {{$match -> point2}}</h3>

        @if (($match -> result))
            <h1>Vincitore: {{$match -> team2}}</h1>

        @else
            <h1>Vincitore: {{$match -> team1}}</h1>
        @endif

    </main>
@endsection
