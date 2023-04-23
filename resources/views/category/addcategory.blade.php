@extends('layouts.app')

@section('content')

<h2 class="text-blue-400 font-bold text-4xl">Add Category</h2>
<hr class="bg-blue-200 h-1 my-1">

<form action="/ " class="form mx-2 my-2">
    <div class="grid grid-col-2 grid-rows-3 gap-5">
        <div>
            <label for="">Category Name </label>
            <input type="text" class="rounded-lg" name="name">
        </div>
        <div>
            <label for="">Category Description </label>
           <textarea name="description" id="" class="rounded-lg" ></textarea>
        </div>
    
        <div>
            <input type="submit" value="Add Category" class="bg-blue-400">
        </div>
    </div>
</form>

@endsection