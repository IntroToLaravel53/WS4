@extends('layouts.app')

@section('content')
    <div class="container">
        <div id="app"></div>


        <div class="panel panel-info">
            <div class="panel-heading clearfix">
                <a href="{{ route('brands.show', $brand->id) }}">{{ $brand->name }}</a>
            </div>
            <div class="panel-body  ">
                {{ $brand->desc}}
            </div>
            <div class="panel-footer clearfix">
                <div class="pull-right">
                    {!! Form::open(array('class' => '',
                           'method' => 'DELETE',
                        'route' => array('brands.destroy', $brand->id))) !!}

                    <a href="{{$brand->id}}/edit" class="btn btn-primary"><span
                                class="glyphicon glyphicon-remove-circle"></span>Edit</a>

                    {{Form::button('<span class="glyphicon glyphicon-remove-circle"></span>Delete', array('type' => 'submit', 'class' => 'btn btn-danger'))}}


                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection
