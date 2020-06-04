<?php

namespace App\Http\Controllers;

use App\products;
use Illuminate\Http\Request;
use \Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;

class ProductsController extends Controller
{
    public function index(){
        $products = products::get();
        return view('admin.indexProducts', [
          'products' => $products  
        ]);
    }

    public function create(){
        return view('admin.createProducts');
    }

    public function store(Request $request){
        request()->validate([
            'pro_name' => [ 'required' , 'max:255'],
            'pro_code' => [ 'required' , 'max:255'],
            'pro_price' => [ 'required' , 'max:255'],
            'pro_dec' => [ 'required' , 'max:255'],
            'pro_img' => [ 'required' , 'max:1000'],
        ]);

        $product = new products;
        $product->pro_name = request('pro_name');
        $product->pro_code = request('pro_code');
        $product->pro_price = request('pro_price');
        $product->pro_dec = request('pro_dec');

        $product->pro_img = request('pro_img')->store('products', ['disk' => 'public']);

        $product->save();
        return redirect('/admin/products');
    }

    public function edit($id){
        $product = products::findorfail($id);

        return view('admin.editproducts', [
            'product' => $product
        ]);
    }
    
    public function update($id){

        request()->validate([
            'pro_name' => [ 'required' , 'max:255'],
            'pro_code' => [ 'required' , 'max:255'],
            'pro_price' => [ 'required' , 'max:255'],
            'pro_dec' => [ 'required' , 'max:255'],
            'pro_img' => ['max:1000'],
        ]);

        $product = products::findorfail($id);
        $product->pro_name = request('pro_name');
        $product->pro_code = request('pro_code');
        $product->pro_price = request('pro_price');
        $product->pro_dec = request('pro_dec');

        if( request('pro_img') != null){
            $file = 'storage/'.$product->pro_img;
            if(File::exists($file)) {
                File::delete($file);
            }
            $product->pro_img = request('pro_img')->store('products', ['disk' => 'public']);
        }

        $product->save();
        return redirect('/admin/products');
    }

    public function destroy($id){
        $product = products::findorfail($id);
        $product->delete();
        return redirect('/admin/products');
    }

    public function show ($id){
        $product = products::findorfail($id);
        return view ('products.show', [
            'product' => $product
        ]);
    }
}
