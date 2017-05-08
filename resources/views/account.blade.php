@extends('master')

@section('title', 'Social Matrix | Account')

@section('content')

<div class="account">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        

                            <h1>WELCOME<br>{{ Auth::user()->name }}</h1>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection