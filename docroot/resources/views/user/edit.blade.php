@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">You Profile</div>

                    <div class="panel-body">
                        <form class="form-horizontal" action="/user/{{$user->id}}/update" method="POST" novalidate>
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label">Username</label>
                                <div class="col-md-6">
                                    <input type="text" id="username" class="form-control" name="username" value="{{$user->name}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label" >Email</label>
                                <div class="col-md-6">
                                    <input type="email" id="email" class="form-control" name="email" value="{{$user->email}}" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
                                <div class="col-md-6">
                                    <input type="password" id="password" class="form-control" name="password" />
                                </div>
                            </div>
                            <div class="form-group col-md-8">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection