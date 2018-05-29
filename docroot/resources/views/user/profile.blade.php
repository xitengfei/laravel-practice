@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        {{ $user->name }}'s Profile
                        @if(Auth::check())
                            <a href="/user/{{ Auth::user()->id }}/edit" class="pull-right"> Edit </a>
                        @endif;
                    </div>

                    <!-- Table -->
                    <table class="table">
                        <tr>
                            <th>Character</th>
                            <th>Real Name</th>
                        </tr>
                        <tr>
                            <td>UserName</td>
                            <td>{{ $user->name }}</td>
                        </tr>
                        <tr>
                            <td>Email Address</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                        <tr>
                            <td>Joined</td>
                            <td>{{ Date('Y-m-d H:i:s', $user->created_at->timestamp) }}</td>
                        </tr>

                    </table>

                </div>
            </div>
        </div>
    </div>
@endsection