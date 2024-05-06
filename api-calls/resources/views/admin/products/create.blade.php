@extends('layouts.admin')

@section('title', 'Create Product')

@section('content')
    <div class="container mt-4">
        <h1>Create New Product</h1>
        @include('admin.products.errors')
        <form method="POST" action="{{ route('admin.products.store') }}">
            @csrf
            @include('admin.products.form')
            <button type="submit" class="btn btn-primary">Submit</button>
            <a href="{{ route('admin.products.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
