@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">    
        @foreach ($products as $product)
        <div class="col-4">
            <div class="card" style="width:18rem;">
                <div class="card-body">
                    <h3 class="card-title">{{$product->name}}</h3>
                    <p>$ {{$product->price}}</p>
                    <p>{{$product->description}}</p>
                </div>
                {{-- <img src="{{Storage::path($product->cover_image)}}" ></img> --}}
            </div>
            <br>
        </div>
    @endforeach
    </div> 
</div>
@endsection
