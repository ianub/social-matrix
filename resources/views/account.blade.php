@extends('master')

@section('title', 'Social Matrix | Home')

@section('content')

	<h1>WELCOME {{ Auth::user()->name }}</h1>

@endsection