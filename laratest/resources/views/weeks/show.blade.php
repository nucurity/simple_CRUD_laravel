@extends('layouts.main')

@section('title')
    My Cd list
@endsection

@section('navbar')
    @parent
    | this my cd nav

@endsection

@section('content')
    <h1>Cd details</h1>

    <h2>{{ $week->name }}</h2>
    <div>Description : {{ $week->description }}</div>
@endsection
