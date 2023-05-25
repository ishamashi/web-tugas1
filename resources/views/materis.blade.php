{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1>Halaman Materi </h1><hr>
    @foreach ($topiks as $materi)
    <ul>
        <li>
            <h2><a href="/materis/{{$materi->slug}}">{{$materi->name}}</a></h2>
        </li>
    </ul>
    @endforeach
@endsection