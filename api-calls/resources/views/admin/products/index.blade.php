@extends('layouts.admin')
@section('title', 'Admin Products')

@section('content')
    <h1>Products</h1>
    <a href="{{ route('admin.products.create') }}" class="btn btn-primary">Create Product</a>

    <div class="container mt-4">
        <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Item Number</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>
                            <img src="{{ $product->image }}" alt="{{ $product->name }}"
                                style="height: 100px; width: auto; object-fit: cover;">
                        </td>
                        <td>{{ $product->name }}</td>
                        <td>${{ number_format($product->price, 2) }}</td>
                        <td>{{ $product->item_number }}</td>
                        <td>
                            <a href="{{ route('admin.products.show', $product) }}"
                                class="btn btn-sm btn-outline-secondary">View</a>
                            <a href="{{ route('admin.products.edit', $product) }}"
                                class="btn btn-sm btn-outline-secondary">Edit</a>
                            <form action="{{ route('admin.products.destroy', $product) }}" method="POST"
                                style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger"
                                    onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

@endsection
