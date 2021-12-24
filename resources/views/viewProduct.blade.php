@extends('layout')
@section('content')
<div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
        <br><br>
        <h3>  Product List </h3>
        <br>
        <div class="row">    
            @foreach($products as $product)
            <div class="col-sm-3">
            <div class="card" >
                <br>
                <img class="card-img-top img-fluid" src="{{asset('images/'.$product->image)}}" alt="Product Image" style='height: 200px;'>
                <br>
                <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">{{$product->name}}</h4>
                    <p class="card-text" style="text-align: center;">{{$product->description}}</p>
                    <br>
                    <h6 class="card-text" style="text-align: center;">RM{{$product->price}}</h6>
                    <a href="{{ route('product.detail', $product->id) }}" class="btn btn-success" style="margin-left:65px">View</a>
                    <br><br>
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