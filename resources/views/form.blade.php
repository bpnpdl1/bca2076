


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <script src="{{asset('datatable/jquery-3.6.0.js')}}"></script>
        <link rel="stylesheet" href="{{asset('datatable/datatables.css')}}">
        <script src="{{asset('datatable/datatables.js')}}"></script>
        

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    </head>
    <body class="font-sans antialiased">

      
  
<div class="flex flex-row justify-center items-center w-screen h-screen">

    <form action="{{ route('formstore')}}" method="post" enctype="multipart/form-data" class="flex flex-col rounded-lg shadow-2xl border-2 p-4 border-separate space-y-3">
      @csrf
        <legend class="font-bold text-2xl">Image upload form</legend>
      <label for="image">Upload an image</label>
      <input type="file" name="image"> 
      <x-input-error :messages="$errors->get('image')" class="mt-2" />
  
      <input type="submit" value="Upload" class="bg-blue-700 text-white p-2 rounded-sm">
       </form>
</div>
    
    </body>
</html>
