@extends('layouts.app')
@section('content')

<h2 class="font-bold text-4xl text-blue-700">Categories</h2>
<hr class="h-1 bg-blue-200 m-4">

<div class="my-4 text-right text-xl">
    <a href="{{ route('category.create')}}" class="bg-blue-400 px-3 py-2 rounded-lg text-white border-blue-800 border-solid shadow-md">Add Category</a>
</div>

<table class="m-2" id="mytable">
    <thead>
        <th>S.N.</th>
        <th>Category Name</th>
        <th>Action</th>
    </thead>
    <tbody>
        @php
          $sn=1;  
        @endphp
        @foreach ($categories as $category )
            
    
        <tr>
            <td>{{$sn++}}</td>
            <td>{{$category['name']}}</td>
            <td><a href="{{ route('category.edit', ['id'=>$category['id']]) }}" class="bg-blue-600 px-2 py-1 rounded-lg text-white">Edit</a>
                <a href="#" class="bg-red-600 px-2 py-1 rounded-lg text-white">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



<script>
    let table = new DataTable('#mytable');
</script>
@endsection
