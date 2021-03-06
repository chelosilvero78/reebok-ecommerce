@extends('layout')

@section('title')
  {{$category->name}} - Reebok Argentina - Tienda Online - Be More Human
@endsection

@section('main')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>{{ $category->name }}</h1>
        <div class="container">
          <div class="row">
            @foreach ($category->products as $product)
              @include('product-card', ['product' => $product])
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection