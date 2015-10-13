@extends('layouts.application')

@section('title', 'show')

@section('content')
    <p><b>Name</b>: {{ $category->name }}</p>
    <p><b>Description</b>: {{ $category->description }}</p>
@endsection
