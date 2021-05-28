@extends('layouts.main-layout')
@section('content')

<main>

    <form method="POST" action="{{ route('store') }}">


        @csrf
        @method('POST')

        <div >
            <label for="team1">Team1</label>
            <div>
                <input id="team1" type="text" name="team1" value="{{$match -> team1}}">
            </div>
        </div>
        <div >
            <label for="team2">Team2</label>
            <div >
                <input id="team2" type="text" name="team2" value="{{$match -> team2}}">
            </div>
        </div>
        <div>
            <label for="point1">Point1</label>
            <div>
                <input id="point1" type="number" name="point1" value="{{$match -> point1}}">
            </div>
        </div>
        <div>
            <label for="point2">Point2</label>
            <div>
                <input id="point2" type="number" name="point2" value="{{$match -> point2}}">
            </div>
        </div>
        <div>
            <label for="result">Result</label>
            <select id="result" name="result">
                {{-- @if ($match -> result == 0)
                    <option selected value="0">Team1</option>
                    <option value="1">Team2</option>
                @else
                    <option value="0">Team1</option>
                    <option selected value="1">Team2</option>
                @endif --}}

                <option value="0"
                    @if ($match -> result == 0)
                        selected
                    @endif
                >Team1</option>
                <option value="1"
                    @if ($match -> result == 0)
                        selected
                    @endif
                >Team2</option>
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
