@extends('admin.layout.admin')

@section('content')
    <h3>Create Product</h3>

    <div class="row">
        {!! Form::open(['route' => 'product.create', 'method'=>'post', 'files'=>true]) !!}

        {!! Form::close() !!}
    </div>
    @endsection