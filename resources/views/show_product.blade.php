@extends('template')
@section('body')
    <div class="card-group">
        @foreach ($items as $item)
            <div class="card">
                <img src={{ $item->image }} class="card-img-top" alt="Product Image" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">IDR {{ $item->price }}</p>
                    <p class="card-text">{{ $item->category }}</p>
                    <form action={{ route('view-product-detail_route', ['id' => $item->id]) }}>
                        <button>
                            <p class="card-text"><small class="text-muted">Detail Produk</small></p>
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
    {{ $items->links() }}
@endsection