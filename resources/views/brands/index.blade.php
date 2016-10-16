@extends('layouts.app')

@section('content')
    <div class="container">




        <div class="page-header">
          <h1>Brand <small>  {!! link_to_route('brands.create', 'Create Brand') !!}</small>  </h1>
        </div>

        @foreach ($brands as $brand)

            <div class="panel panel-success">
                <div class="panel-heading">
                    <a href="{{ route('brands.show', $brand->id) }}">{{ $brand->name }}</a>
                </div>
                <div class="panel-body">
                    {{ $brand->desc}}
                </div>
            </div>
        @endforeach
        {{ $brands->links() }}
    </div>
@endsection
