@extends('layouts.app')


@section('content')

  @foreach ($products as $product)

  {!! $product->id !!}

  @endforeach

@endsection
