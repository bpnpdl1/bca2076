@extends('layouts.app')

@section('content')

<h2 class="font-bold text-2xl text-blue-300">Products</h2>
        <hr class="h-1 bg-blue-700 my-4">

        <div class="flex flex-row">



            <form action="{{ route('products.update', ['id'=>$product['id']]) }}" method="post" enctype="multipart/form-data">
            @csrf
                <div>
                <label for="name">Name of the Product </label>
                <input type="text" name="name" value="{{$product['name']}}">
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
       
            </div>
            <div>
                <label for="price">Price of the Product </label>
                <input type="text" name="price" value="{{$product['price']}}">
                <x-input-error :messages="$errors->get('price')" class="mt-2" />
       
            </div>
            <div>
                <label for="image">Upload image of the Product </label>
                <input type="file" name="image">
                <x-input-error :messages="$errors->get('image')" class="mt-2" />
       
            </div>
            <div>
                <label for="quantity">Quantity of the Product </label>
                <input type="number" name="quantity" value="{{$product['quantity']}}">
                <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
       
            </div>
            <input type="submit" value="Add product" class="bg-blue-500 p-2 rounded-lg"/>
            </form>

            <div>
                <img src="{{asset('storage/'.$product['image'])}}" alt="product Image" width="350px">
            </div>
        </div>


<script>
    let table=new DataTable("#mytable");
</script>
@endsection