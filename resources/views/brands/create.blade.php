<!-- /resources/views/brand/create.blade.php -->


@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Brand</h2>

        {!! Form::model(new App\Brand, ['route' => ['brands.store']]) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name:') !!}
            {!! Form::text('name', '', ['class'=>'form-control' ]) !!}
        </div>
        <div class="form-group">
            {!! Form::label('desc', 'Desc:') !!}
            {!! Form::text('desc', '', ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('submit', ['class'=>'btn primary']) !!}
        </div>


        {!! Form::close() !!}
    </div>
@endsection
 