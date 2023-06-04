<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function home(){
        return view('/index');
    }
    public function  index()
    {
        $data['products']=Product::all();
        return view('product', $data);

    }
    public function  create()
    {
        return view('productadd');
    }
    public function  store(Request $request)
    {

       $validatedata=$request->validate([
        'name'=>'required|string|max:25',
        'rate'=>'required|numeric|min:0'
       ]);
        Product::create($validatedata);
        return redirect(route('product'));
    }
    public function  show($id)
    {
          
        $product=Product::find($id);
    
        return view('productview', compact('product'));
       
    
    }
    public function  edit($id)
    {
        $product=Product::find($id);
         return view('productedit', compact('product'));
    }
    public function  update(Request $request, Product $product, $id)
    {
        $product=Product::findorfail($id);

        $product->update($request->all());
    
        return redirect()->route('product');

    }
    
    public function  destroy($id)
    {
        Product::find($id)->delete();
        return redirect()->route('product');    
    }
    
}
