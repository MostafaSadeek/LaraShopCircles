@extends('layouts.app')
@section('title')
    Home
@endsection

@section('content')
<div class="text-center">
    <h3>Products</h3>
</div>
<div class="row text-center m-4">
    <div class="col-4">
        <select class="form-control ">
            <option>Catagories</option>
            <option>electronics</option>
            <option>toys</option>
            <option>food</option>
        </select>
    </div>

    <div class="col-4">
        <select class="form-control ">
            <option>price</option>
            <option>lower to higher</option>
            <option>higher to lower</option>
        </select>
    </div>

    <div class="col-4 ">
        <select class="form-control ">
            <option>stars</option>
            <option>lower to higher</option>
            <option>higher to lower</option>

        </select>
    </div>
</div>


<div class="container mt-5">
    <div class="row">
        @foreach ($products as $product)
        <div class="col-xl-3 col-lg-3 col-md-4 col-sm-12 text-center border">
            <a href="/products/{{ $product->id }}"><img src= "/storage/{{ $product->pro_img }}" alt="product image" style="height: 150px; width:auto;" class="pt-3"> </a>
            <hr>
            <h5>{{ $product->pro_name  }}</h5>
            <hr>
            <p >{{ $product->pro_price }} $</p> 
        </div>
    @endforeach
    </div>
</div>
@endsection
