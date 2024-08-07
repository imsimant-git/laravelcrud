<?php

namespace App\Http\Controllers;

use App\models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        return view('products.index');

    }
    public function create()
    {
        return view('products.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'password'=>'required'
        ]);

     $product=new product;
     $product->name=$request->name;
     $product->password=$request->password;
     $product->save();
      return redirect()->back();
    }
    public function view(){
        $data=Product::all();
        return view('products.display',compact('data'));
    }
    public function delete($id){
        $data=product::find($id);
        $data->delete();
        return redirect()->back();
    }
    public function update_view($id){

        $product=product::find($id);
        return view('products.update', compact('product'));
    }
    public function update(Request $request,$id){

       $product=product::find($id);
       $product->name=$request->name;
       $product->password=$request->password;
       $product->save();
       return redirect()->back();
    }
}
