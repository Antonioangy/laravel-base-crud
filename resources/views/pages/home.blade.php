@extends('layouts.main-layout')
@section('content')
    <h1>Lista:</h1>
    <ul>
        @foreach ($comics as $comic)
            <li>
                <b>
                    <a href="{{ route('show', $comic -> id)}}">
                        {{ $comic -> title }} - {{ $comic -> author }} - {{ $comic -> release_date }}
                    </a>
                 </b>
            </li>
        @endforeach
    </ul>
    
@endsection