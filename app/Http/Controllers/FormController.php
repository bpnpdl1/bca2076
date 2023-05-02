<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\images;
use Illuminate\Support\Facades\Storage;

class FormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('form');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function stored(Request $request)
    {
        //
        $data=$request->validate([
            'image'=>'required|file|mimes:pdf|max:512'
        ]);
        
    $path=Storage::disk('public')->put('images',$request->file('image'));

    if($oldpath=images::all()->where('image',$path)){
        Storage::disk('public')->delete($oldpath);

    }
    
    $image=images::create(['image'=>$path]);
     
    $image=compact('image');

       
 

        return view('viewimage')->with($image);

    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('viewimage');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
