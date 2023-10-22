@extends('main.index')

@section('container')
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <br>
    <a href="/blog">Back</a>
@endsection
