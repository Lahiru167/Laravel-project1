@extends('layout')

@section('content')
    <h1>Edit Product</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="name" value="{{ $product->name }}" required><br>
        <input type="text" name="price" value="{{ $product->price }}" required><br>
        <textarea name="description">{{ $product->description }}</textarea><br>
        <button type="submit">Update</button>
    </form>
@endsection
