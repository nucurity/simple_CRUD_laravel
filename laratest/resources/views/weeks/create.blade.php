@extends('layouts.main')

@section('title')
My Cd list
@endsection

@section('navbar')
@parent
| this my cd nav

@endsection

@section('content')
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li> {{ $error }}</li>
        @endforeach
    @endif

<h1>Add cd</h1>
<form method="post" action="{{ url('weeks/create') }}">
    {{ csrf_field() }}
    Name: <input type="text" name="name" value="{{ Request::old('name') }}"><br />
    Description: <input type="text" name="description" value="{{ Request::old('description') }}"><br />
    <input type="submit" value="Add week" />
</form>
@endsection