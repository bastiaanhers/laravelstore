@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @foreach ($products as $product)
            <div class="card" id="product_card">
                <div class="card-header">{{$product->name}}</div>
                    <p>{{$product->price}}</p>
                    <br>
                    <p>{{$product->description}}</p>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</div>
@endsection
