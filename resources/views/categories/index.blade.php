@extends('layouts.application')

@section('title', 'All Categories')

@section('content')

<h2>All Categories</h2>
<ul>
@foreach($categories as $key => $category)
    <li>
        <p>
             <a href="{{ route('category.show', [$category->id]) }}">
                {{ $category->name }}
             </a>
        </p>
        <p>
            <a href="{{ route('category.edit', [$category->id]) }}" class="btn btn-success">
                Edit
            </a>
        </p>
        {!! Form::open(['url' => route('category.destroy', [$category->id]),
            'method' => 'delete'])
        !!}
            <button type="submit" class="btn btn-danger">Delete</button>
        {!! Form::close() !!}
    </li>
@endforeach
</ul>

@endsection
