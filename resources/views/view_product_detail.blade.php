@extends('template')
@section('body')
<div class="container-sm">
    <div class="card">
        <img src={{ $product->image }} class="card-img-top" alt="Product Image" style="width: 18rem;">
        <div class="card-body">
            <h5 class="card-title">{{ $product->name }}</h5>
            <p class="card-text">Category: {{ $product->category }}</p>
            <p class="card-text">Price: IDR {{ $product->price }}</p>
            <p class="card-text">Description: {{ $product->description }}</p>
        </div>
    </div>
</div>
@endsection