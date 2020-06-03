@extends('layouts.app')
@section('title')
    {{ $product->pro_name }}
@endsection

@section('content')
    <div class='text-center'>
        <a href="/products/{{ $product->id }}"><img src= "/storage/{{ $product->pro_img }}" alt="Card image cap" style="height: 300px; width:auto;" class="pt-3"> </a>
        <hr>
        <h5>{{ $product->pro_name  }}</h5>
        <hr>
        <p >{{ $product->pro_price }} $</p> 
        <p >{{ $product->pro_dec }} </p>
    </div>
@endsection