{{-- @dd($posts) --}}
@extends('layouts.main')
@section('container')
    <h1>Halaman Blog</h1><hr>
    @foreach ($posts as $post)
        <article class="mb-5 pb-3 border-bottom">
            <h2>
                <a href="/blog/{{$post->slug}}">{{$post->title}}</a>
            </h2>
            <h5>by. {{$post->author}} in <a href="/materis/{{$post->materi->slug}}"> {{$post->materi->name}}</a></h5>
            <p>{{$post->excerpt}}</p>
            <a href="/blog/{{$post->slug}}">Read more...</a>
        </article>
    @endforeach
@endsection