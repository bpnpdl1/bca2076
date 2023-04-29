@extends('layouts.app')

@section('content')
    <h2 class="font-bold text-blue-500 text-4xl">Add Products</h2>
    <hr class="h-1 bg-blue-700 my-4">


    <div class="bg-blue-300 rounded-lg">

       <form action="{{ route('products.store') }}" class=" p-4"  method="POST">
    @csrf
<div class="m-2 ">
    <label for="">Name</label>
    <input type="text" name="name" id="">
    @error('name')
        <p class="text-red-600 text-xs mt-2">{{$message}}</p>
    @enderror
</div>
<div class="m-2">
    <label for="">Price</label>
    <input type="text" name="price" id="">
</div>
<button type="submit" class="bg-blue-700  text-white" >Add Product</button>
    </form>
    </div>
@endsection