@extends('layouts.products')
@section('title', 'Products')

@section('content')
<h1> Products</h1>
<div class="container mt-4">
    <div class="row">
        @foreach ($products as $product)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img src="{{ $product->image }}" alt="{{ $product->name }}" class="card-img-top" style="height: 225px; width: 100%; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title"><a href="{{ route('products.show', $product) }}">{{ $product->name }}</a></h5>
                        <p class="card-text">${{ number_format($product->price, 2) }}</p>
                        <p class="card-text">{{ $product->item_number }}</p>
                        <a href="{{ route('products.show', $product) }}" class="btn btn-sm btn-outline-secondary">View</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection