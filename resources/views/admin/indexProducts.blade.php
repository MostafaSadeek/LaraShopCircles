@extends('admin.master')
@section('title')
    Products
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary btn-block"> <a href="/admin/products/create"> Create new product </a></button>
            </div> 
        </div>
        <div class="row mt-3 mb-3 text-center">
            <div class="col-4">
                Product name
            </div>
            <div class="col-3">
                Product code
            </div>
            <div class="col-3">
                Product price
            </div>
            <div class="col-2">
                -
            </div>
        </div>
        <hr>
        @foreach ($products as $product)
            <div class="row  mb-3 p-1 text-center">
                <div class="col-4">
                    {{ $product->pro_name }}
                </div>
                <div class="col-3">
                    {{ $product->pro_code}}
                </div>
                <div class="col-3">
                    {{ $product->pro_price}} $
                </div>
                <div class="col-2">
                    <a href="/admin/products/edit/{{ $product->id }}"><button>Edit</button></a>
                </div>
            </div>
            <hr>
        @endforeach
    </div>

@endsection