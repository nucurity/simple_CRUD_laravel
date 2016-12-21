@extends('layouts.main')

@section('title')
    My Cd list
@endsection

@section('navbar')
    @parent
     | this my cd nav

@endsection

@section('content')
    <h1>Cds List</h1>

    <ul>
        @foreach($weeks as $week)
            <li><a href="{{ url('/weeks', $week->id) }}">{{ $week->name }}</a></li>
        @endforeach
    </ul>


    <a href="{{ url('/weeks/create') }}">Add week</a>
@endsection



