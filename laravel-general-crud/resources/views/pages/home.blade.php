@extends('layouts.main-layout')
@section('content')
    <main class="home">
        <ul>
            @foreach ($matches as $match)
                <li>
                    <a href="{{ route('show', $match -> id) }}">
                        <h2>{{$match -> team1}} VS {{$match -> team2}}</h2>
                    </a>
                    <a href="{{route('edit', $match -> id)}}">
                        &#9998;
                    </a>
                    <a href="{{route('destroy', $match -> id)}}">
                        &#10060;
                    </a>
                </li>
            @endforeach
        </ul>

    </main>
@endsection
