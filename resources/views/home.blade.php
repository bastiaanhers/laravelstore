@extends('layouts.app')

@section('content')
<div class="container"> 
    @foreach ($products as $product)
        <div class="card col-md-3">
            <div class="card-header">{{$product->name}}</div>
            <img src="{{Storage::path($product->cover_image)}}" ></img>
                <p>$ {{$product->price}}</p>
                <br>
                <p>{{$product->description}}</p>
            </div>
        </div>
    @endforeach
</div>
@endsection
