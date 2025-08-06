@extends('layout')

@section('content')
    <h1>Product List</h1>
    <a href="{{ route('products.create') }}">+ Add Product</a>
    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif
    <ul>
        @foreach ($products as $product)
            <li>
                <strong>{{ $product->name }}</strong> - ${{ $product->price }}
                <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
