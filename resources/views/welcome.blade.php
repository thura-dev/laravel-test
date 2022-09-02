@extends('master')
@section('title') Home Page @endsection
@section('content')
<h1>This is Home Page</h1>
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>
<a href="{{ route('contact') }}">Contact</a>
@endsection
