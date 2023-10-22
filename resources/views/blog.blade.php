@extends('main.index')

@section('container')
    <h2>Halaman Blog</h2>
    <br>
    @foreach ($post as $post)
        <a href="/blog/{{ $post->id }}">{{ $post->title }}</a>
        <br>
    @endforeach
@endsection
