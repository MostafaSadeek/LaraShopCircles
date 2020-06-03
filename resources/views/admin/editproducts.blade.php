@extends('admin.master')
@section('title')
    Edit product
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <h3>Edit product</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="/admin/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <label for="pro_name">Product Name</label>
                    <textarea name="pro_name" id="pro_name" cols="30" rows="1" class="col-12">{{ $product->pro_name }}</textarea>
                    @error('pro_name')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <label for="pro_code">Product Code</label>
                    <textarea name="pro_code" id="pro_code" cols="30" rows="1" class="col-12">{{ $product->pro_code}}</textarea>
                    @error('pro_code')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <label for="pro_price">Product Price</label>
                    <textarea name="pro_price" id="pro_price" cols="30" rows="1" class="col-12">{{ $product->pro_price}}</textarea>
                    @error('pro_price')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <label for="pro_dec">Product description</label>
                    <textarea name="pro_dec" id="pro_dec" cols="30" rows="1" class="col-12">{{ $product->pro_dec}}</textarea>
                    @error('pro_dec')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <div>
                        <img src="/storage/{{$product->pro_img}}" alt="product image" style="  width: auto;
                        height: 100px;">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlFile1">product image</label>
                        <input type="file" class="form-control-file" id="pro_img" name="pro_img">
                    </div>

                    @error('pro_img')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <button type="submit" class="btn-block mb-2">Update</button>
                </form>
                
                <form action="/admin/products/{{ $product->id }}" method="post">
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn-block">Delete</button>
                </form>
            </div>
        </div>
    </div>
@endsection

    