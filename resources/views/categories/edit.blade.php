@extends('layouts.application')
@section('title', 'Edit Category')

@section('content')

    {!! Form::model($category, ['action' => ['CategoryController@update', $category->id], 'method'=>'PATCH']) !!}
        <div class="form-group">
            {!! Form::label('name') !!}
            {!! Form::text('name', null, [
                'placeholder' => $category->name,
                'class' => 'form-control'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description') !!}
            {!! Form::textarea('description', null, [
                'placeholder' => $category->description,
                'class' => 'form-control'
            ]) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Edit', [
                'class'=>'btn btn-primary'
            ]) !!}
        </div>

    {!! Form::close() !!}
@endsection
