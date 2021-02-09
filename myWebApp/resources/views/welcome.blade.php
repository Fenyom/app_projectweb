@extends('product/template')

@section('title')
     Welcome
@stop

@section('content')
        <div class="title m-b-md">
            {{ env('APP_NAME') }}
        </div>
@stop