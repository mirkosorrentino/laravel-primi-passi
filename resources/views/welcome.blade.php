@extends('layouts.app')

@section('title')
    Welcome
@endsection

@section('content')
    <h1>{{ $title }}</h1>
    <h2>I nostri studenti:</h2>
    <ul>
        @foreach ($students as $student) 
            <li>{{ $student }}</li>
        @endforeach
    </ul>

    <h2>I nostri insegnanti:</h2>
    @if (count($teachers) === 0)
        <p>Non ci sono insegnanti assegnati</p>  
    @else
        <ul>
            @foreach ($teachers as $teacher) 
            <li>{{ $teacher }}</li>
            @endforeach
        </ul>
    @endif
    <a href="/about">About page</a>
@endsection
        