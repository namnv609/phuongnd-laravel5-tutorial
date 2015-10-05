@extends('layouts.application')

@section('title', 'Admin Page')

@section('sidebar')
    @parent

    <header class="navbar navbar-fixed-top navbar-inverse">
        <div class="container">
            <a href="{{ url('/') }}" id="logo">News Page</a>
            <nav>
                <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li>
                        <a href="{{ url('/auth/login') }}">Login</a>
                    </li>
                @else
                    <li>
                        <a href="{{ url('/auth/logout') }}">Logout</a>
                    </li>
                @endif
                </ul>
            </nav>
        </div>
    </header>
@stop

@section('content')
    <p>This is my body content.</p>
@stop
