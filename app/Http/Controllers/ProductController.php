<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::get();
    //view call
        return view('product.index')->with(compact('products'));
    }

    public function create(){
    
        return view('product.create');
    }

    public function store(Request $request){

        // dd($request);

        $imageName = $request->file('image_url')->getClientOriginalName();  
     
        $request->image_url->move(public_path('image'), $imageName);

        $data = [
            'name'=>$request->name,
            'amount'=>$request->amount,
            'description'=>$request->description,
            'image_url'=>$imageName,
        ];
       

        $product = Product::create($data);
       
        if($product)
        {
            return redirect()->route('product.index');
        }
        else
        {
            return;
        }
    } 

    public function edit_pro($product_id){
        $post = Product::find($product_id);
        return view('product.edit', compact('post'));
    }

    public function update_pro( Request $request ,$post_id){
        // $data = $request->all();
        
        $post = Product::find($post_id);
        if($request->has('image_url'))
        {

            $imageName = $request->file('image_url')->getClientOriginalName(); 
            $request->image_url->move(public_path('image'), $imageName);
          
          

            $post->name= $request['name'];
            $post->amount = $request['amount'];
            $post->description = $request['description'];
            $post->image_url =$imageName;
           
            $post->update();

        }
        else {
            $post->name = $request['name'];
            $post->amount = $request['amount'];
            $post->description = $request['description'];
            $post->update();
        }
        return redirect()->route('product.index');

    }


    public function show($product_id){
        // $product_detail = "";
        $product_detail = Product::find($product_id);
        return view('product.show', compact('product_detail'));
    }


    




}
