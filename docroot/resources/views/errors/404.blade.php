@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-danger text-center">
                    <h1>404</h1>
                    <h2>Oops! The page you are find is lost...</h2>
                    <p>Message: {{$exception->getMessage()}}</p>
                    <div>
                        <a href="{{ url('/') }}">Click here to visit the homepage.</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection