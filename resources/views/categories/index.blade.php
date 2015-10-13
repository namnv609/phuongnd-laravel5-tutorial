@extends('layouts.application')

@section('title', 'All Categories')

@section('content')

<h2>All Categories</h2>
<ul>
@foreach($categories as $key => $category)
    <li>
        <p>{{ $category->id }}</p>
        <p>{{ $category->name }}</p>
    </li>
@endforeach
</ul>

@endsection
