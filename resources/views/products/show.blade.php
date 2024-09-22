<!-- products/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Product Details</div>

                    <div class="card-body">
                        <p>Shan Asif Created this:::::</p>
                        <p><strong>Name:</strong> {{ $product->name }}</p>
                        <p><strong>Description:</strong> {{ $product->description }}</p>
                        <p><strong>Price:</strong> {{ $product->price }}</p>
                        <a href="{{ route('products.edit', $product->id) }}">Edit</a>
                        <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
