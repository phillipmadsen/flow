@extends('layouts.app')


@section('content')


{{ var_dump($products->toArray())}}

  @foreach ($products as $product)

  

  @endforeach

@endsection
