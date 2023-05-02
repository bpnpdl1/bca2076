<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
      
        $products=products::all();

        $labels=$products->keys();
        $data=$products->values();
       
        return view('admin.products.index')->with(compact('products','labels','data'));
    }

    /**
     * Show the form for creating a new resource.
     */

    
    public function create()
    {
       
       
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       
        $data=$request->validate([
            'name'=>'required',
            'price'=>'required',
            'image'=>'required|image',
            'quantity'=>'required'
            
        ]);


$image=Storage::disk('public')->put('images',$request->file('image'));


       $products=$request->toArray();

       $product=[
        'name'=>$products['name'],
        'price'=>$products['price'],
        'quantity'=>$products['quantity'],
        'image'=>$image
       ];
        products::create($product);

        
   
        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product=products::find($id);

         $product=compact('product');
         return view('admin.products.edit')->with($product);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        dd($request);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
