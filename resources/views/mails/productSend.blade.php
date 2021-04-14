@extends('layouts.emails')
@section('content')

    <h3>{{  $product->name}}</h3>

    <h4>welcomes</h4>

    <p>{!!$product->description !!}</p>

@endsection
