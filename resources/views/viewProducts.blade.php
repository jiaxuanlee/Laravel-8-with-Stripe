@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
        <h3>  Product List </h3>
        <div class="row">    
            @foreach($products as $product)
            <div class="col-sm-4">
            <div class="card" style="width: 19rem;">
                <img class="card-img-top img-fluid" src="{{asset('images/'.$product->image)}}" alt="Product Image" style='max-height: 350px;'>
                <div class="card-body">
                    <h5 class="card-title" style="text-align: center;">{{$product->name}}</h5>
                    <p class="card-text">{{$product->description}}</p>
                    <br>
                    <h5 class="card-text" style="text-align: center;">RM{{$product->price}}</h5>
                    <a href="{{ route('product.detail', $product->id) }}" class="btn btn-success" style="margin-left:100px">View</a>
                </div>
            </div>
            </div>
            @endforeach
        </div>    
        <br><br>
    </div>
    <div class="col-sm-2"></div>
</div>

@endsection