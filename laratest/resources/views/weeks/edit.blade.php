@extends('layouts.main')
@section('title')
    My Cd List
@endsection


@section('content')

    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach

    @endif
    <h2>Update cd</h2>

    <form method="post" action="{{ url('/weeks/edit', $week->id) }}">

        {{ csrf_field() }}
        Name: <input type="text" name="name" value="{{ $week->name }}" /><br />
        Description: <input type="text" name="description" value="{{ $week->description }}" /><br />
        <input type="submit" name="submit" />
    </form>

@endsection