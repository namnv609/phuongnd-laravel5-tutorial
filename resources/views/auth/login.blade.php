<!-- resources/views/auth/login.blade.php -->
@extends('layouts.application')

@section('title', 'Login')

@section('content')
<form method="POST" action="/auth/login" >
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="email" class="control-label">
            Email
        </label>
        <input type="email" name="email" class="form-control" id="email" value="{{ old('email') }}">
    </div>

    <div class="form-group">
        <label for="password" class="control-label">
            Password
        </label>
        <input type="password" class="form-control" name="password" id="password">
    </div>

    <div class="form-group">
        <div class="checkbox">
            <label>
                <input type="checkbox" name="remember">Remember Me
            </label>
        </div>
    </div>

    <div class="form-group">
        <button type="submit" class="btn btn-default">
            Login
        </button>
    </div>
</form>
@stop
