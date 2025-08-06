@extends('layout')

@section('content')
    <h1>Create Product</h1>
    <form action="{{ route('products.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Name" required><br>
        <input type="text" name="price" placeholder="Price" required><br>
        <textarea name="description" placeholder="Description"></textarea><br>
        <button type="submit">Create</button>
    </form>
@endsection
