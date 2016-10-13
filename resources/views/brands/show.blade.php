@extends('layouts.app')

@section('content')
    <div class="container">


        @foreach ($brands as $brand)

            <div class="panel panel-success">
                <div class="panel-heading">  {{ $brand->name }}    id: {{ $brand->id }}</div>
                <div class="panel-body">
                    {{ $brand->desc}}
                </div>
            </div>
        @endforeach


            {{ $brands->links() }}
    </div>
@endsection
