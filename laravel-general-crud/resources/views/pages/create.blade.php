@extends('layouts.main-layout')
@section('content')

<main>

    <form method="POST" action="{{ route('store') }}">


        @csrf
        @method('POST')

        <div >
            <label for="team1">Team1</label>
            <div>
                <input id="team1" type="text" name="team1">
            </div>
        </div>
        <div >
            <label for="team2">Team2</label>
            <div >
                <input id="team2" type="text" name="team2">
            </div>
        </div>
        <div>
            <label for="point1">Point1</label>
            <div>
                <input id="point1" type="number" name="point1">
            </div>
        </div>
        <div>
            <label for="point2">Point2</label>
            <div>
                <input id="point2" type="number" name="point2">
            </div>
        </div>
        <div>
            <label for="result">Result</label>
            <select id="result" name="result">
                <option selected value="0">Team1</option>
                <option value="1">Team2</option>
            </select>
        </div>
        <div>
            <div>
                <button type="submit">
                    CREATE
                </button>
            </div>
        </div>
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

</main>
@endsection
