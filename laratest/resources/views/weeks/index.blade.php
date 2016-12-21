@extends('layouts.main')
@section('title')
    My Cd List
@endsection

@section('navbar')
    this is my sub menu<br />
    @parent
    <br />this is my sub sub menu<br />
@endsection
@section('content')
        <h2>My week list</h2>
        <ul>
            @foreach($weeks as $week)
                <li><a href="{{ url('/weeks', $week->id) }}">{{ $week->name }}</a>
                   |  <a href="{{ url('/weeks/delete',$week->id) }}">Delete</a>
                   |  <a href="{{ url('/weeks/edit',$week->id) }}">Update</a>

                </li>
            @endforeach
        </ul>

        <a href="{{ url('/weeks/create')}}">Add week</a>
@endsection


