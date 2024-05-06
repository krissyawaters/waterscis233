@extends('layouts.admin')
@section('title', 'Detail')


@section('content')
    <h1> Product Details</h1>
    <div class="container mt-4">
        <div class="card">
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="width: 100%; height: auto;">
            <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text">{{ $product->description }}</p>
                <p class="card-text"><strong>Price:</strong> ${{ number_format($product->price, 2) }}</p>
                <p class="card-text"><strong>Item Number:</strong> {{ $product->item_number }}</p>
                <a href="{{ route('admin.products.index') }}" class="btn btn-primary">Go back</a>
            </div>
        </div>
    </div>
@endsection

