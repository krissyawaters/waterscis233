@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
    <div class="container mt-4">
        <h1>Edit Product</h1>
        @include('admin.products.errors')
        <form method="POST" action="{{ route('admin.products.update', $product->id) }}">
            @csrf
            @method('PUT')
            @include('admin.products.form', ['product' => $product])
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
