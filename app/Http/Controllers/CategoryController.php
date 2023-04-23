<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Categories;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
        $categories=Categories::all()->toArray();
        return view('category.index')->with('categories',$categories);

    }

    public function addcategory(){
        return view('category.addcategory');
    }

    public function categorystore(){
        $data=request();

        $categories=Categories::insert($data->toArray());

        $categories=Categories::all()->toArray();
        return view('category.index')->with('categories',$categories);

      

    }
    public function insert(){

        $category=[
            [
              'name'=>'category-6'
            ],
            [
                'name'=>'category-7'
            ],
            [
                'name'=>'category-8'
              ]
        ];
        $categories=Categories::insert($category);
        dd($categories);
    }

    public function edit($id){
        $categories=Categories::find($id);

dd($categories);

        $categories->name="Updated name";

        $categories->save();

        dd($categories->toArray());

    }
    public function testdb(){

        
        $categories=Categories::all()->toArray();
        dd($categories);

    
    }
}
