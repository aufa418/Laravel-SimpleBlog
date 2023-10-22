@extends('main.index')

@section('container')
    <h2>Halaman About</h2>
    <br>
    <h3>{{ $aboutData['name'] }}</h3>
    <h5>{{ $aboutData['email'] }}</h5>
@endsection
