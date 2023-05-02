@extends('layouts.app')

@section('content')
    

<h2 class="font-bold text-4xl text-color text-blue-700">Products</h2>
<hr class="h-1 bg-blue-700 my-4">

<div>
    <a class="bg-blue-500 float-right py-1 px-2 text-white rounded-lg my-2 mx-2" href="/Addproducts">Add Products</a>
</div>
<div>
    <table class="table" id="mytable">
    <thead>
      
        <tr>
            <th>SN</th>
            <th>Image</th>
            <th>Name</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Action</th>
        </tr>

    </thead>
    <tbody>
       @php
         $sn=1;  
       @endphp
        @foreach ($products as $product)
            
       
        <tr>
            <td>{{$sn++}}</td>
            <td><img src="{{asset('storage/'.$product['image'])}}" alt="image" width="60px" height="60px"></td>
            <td>{{ $product['name']}}</td>
            <td>{{ $product['price']}}</td>
            <td>{{$product['quantity']}}</td>
            <td>
                <a href="" class="bg-red-600 px-2 py-1 rounded-lg text-white">Trash</a>
                <a href="{{ route('products.edit', ['id'=>$product['id']]) }}" class="bg-blue-600 px-2 py-1 rounded-lg text-white">Edit</a>
            </td>
        </tr>
        @endforeach
    </tbody>
    </table>
    
</div>




<script>
    let table=new DataTable('#mytable');
</script>

@endsection