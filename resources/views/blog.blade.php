@extends('layouts.main')

@section('container')
    <article>
        <h2>{{ $post->title }}</h2>
        <h5>by. {{$post->author}} in <a href="/materis/{{$post->materi->slug}}"> {{$post->materi->name}}</a></h5>
        {!! $post->body !!}
    </article>
    <a href="/blog">Kembali</a>
@endsection