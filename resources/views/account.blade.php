@extends('master')

@section('title', 'Social Matrix | Account')

@section('content')

<div class="account">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">
                <div class="panel panel-default">
                    <div class="panel-body">
                        
                        <div class="text-align">
                            <h1>WELCOME {{ Auth::user()->name }}<br>
                            <a href="/team/#team1"><button type="button" class="btn btn-default text-center"><h4><strong>Make changes to team</strong></h4></button></a><br>
                            <a href="/home"><button type="button" class="btn btn-default text-center"><h4><strong>Go to home page</strong></h4></button></a><br>
                            <a href="{{ route('password.request') }}"><button type="button" class="btn btn-default text-center"><h4><strong>Change your password</strong></h4></button></a></h1>
                          
                            
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection