@extends('master')

@section('title', 'Social Matrix | Account')

@section('content')

	<h1>WELCOME {{ Auth::user()->name }}</h1>

@endsection