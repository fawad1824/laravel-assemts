@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4 class="mt-1">Products List</h4>
            </div>
            <div class="row row-eq-height justify-content-center p-4">
                @foreach ($products as $product)
                    <div class="col-md-4 p-2">
                        <div class="card">
                            <div class="card-header">
                                <h4>
                                    {{ $product->title }}
                                </h4>

                                @if (Auth::check())
                                    @php
                                        $productPrice = DB::table('users_products')
                                            ->where('product_id', $product->id)
                                            ->where('user_id', Auth::user()->id)
                                            ->first();
                                    @endphp
                                    @if ($productPrice)
                                        <span>special price ({{ $productPrice->specialprice . 'Rs' }})</span>
                                    @else
                                        <span>Base Price ({{ $product->price . 'Rs' }})</span>
                                    @endif
                                @else
                                    <span>Base Price ({{ $product->price . 'Rs' }})</span>
                                @endif
                            </div>

                            <div class="card-body">
                                <p>{{ $product->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $products->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
@endsection
