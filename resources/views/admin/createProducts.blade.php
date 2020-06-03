@extends('admin.master')
@section('title')
    Create new product
@endsection
@section('content')
    <div class="container">
        <div class="row mb-3">
            <h3>Create a New product</h3>
        </div>
        <div class="row">
            <div class="col-12">
                <form action="/admin/products" method="post" enctype="multipart/form-data">
                    @csrf
                    
                    <label for="pro_name">Product Name</label>
                    <textarea name="pro_name" id="pro_name" cols="30" rows="1" class="col-12"></textarea>
                    @error('pro_name')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <label for="pro_code">Product Code</label>
                    <textarea name="pro_code" id="pro_code" cols="30" rows="1" class="col-12"></textarea>
                    @error('pro_code')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <label for="pro_price">Product Price</label>
                    <textarea name="pro_price" id="pro_price" cols="30" rows="1" class="col-12"></textarea>
                    @error('pro_price')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <label for="pro_dec">Product description</label>
                    <textarea name="pro_dec" id="pro_dec" cols="30" rows="1" class="col-12"></textarea>
                    @error('pro_dec')
                        <p class="text-danger " >{{ $message }}</p>
                    @enderror

                    <div class="form-group">
                        <label for="exampleFormControlFile1">product image</label>
                        <input type="file" class="form-control-file" id="pro_img" name="pro_img">
                    </div>

                        @error('pro_img')
                            <p class="text-danger " >{{ $message }}</p>
                        @enderror

                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>
@endsection