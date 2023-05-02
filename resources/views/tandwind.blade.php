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
    {{-- <div class="flex flex-row h-screen">
        <div class=" bg-gray-900 text-white w-60 flex-shrink-0 px-4 py-6 space-y-4">
           <div class="flex flex-row space-x-3 bg-slate-600 p-4 rounded-md">
            <i class="fa-solid fa-user text-xl"></i>
            <p> Admin Panel</p>
            </div> 
            <div class="bg-slate-600 rounded-md flex flex-col justify-evenly p-2 space-y-3">
               <div class="  text-white hover:rounded-md">
                <i class="fa-sharp fa-solid fa-table-columns"></i>
                <a>Dashboard</a>
                <hr>
               </div>
              
               <div class=" text-white hover:rounded-md">

                <a><i class="fa-sharp fa-solid fa-people-group"></i> Team</a>
                <hr>
               </div>

               <div class=" text-white hover:rounded-md">
                <a><i class="fa-solid fa-list-check"></i>  Tasks</a>
                <hr>
               </div>

               <div class=" text-white hover:rounded-md">
                <a><i class="fa-sharp fa-regular fa-person-chalkboard"></i> Notices</a>
                <hr>
               </div>
               <div class=" text-white hover:rounded-md">
                <a><i class="fa-solid fa-list-check"></i> Reports</a>
                <hr>
               </div>
               
            </div>
        </div>
        <div class="flex flex-col flex-1 bg-slate-100 ">
            <div class="bg-black flex flex-row justify-between items-center text-white px-8 py-3">
                <div class=" w-72 flex flex-row space-x-4 items-center">
                    <i class="fa-solid fa-bars"></i>
                    <div>
                        <input class="text" placeholder="Search">
                    <button> <i class="fa-solid fa-search"></i></button>
                    </div>
                </div>
                <div class="w-24 flex flex-row justify-around ">
                    <i class="fa-solid fa-bell"></i>
                    <i class="fa-solid fa-message"></i>
                    <i class="fa-solid fa-user"></i>
                </div>
            </div>
            <div class="flex-1 p-3">
                
            <h2 class="font-bold text-2xl">Dashboard</h2>
            <hr class="h-2">



            <div class="flex flex-row  justify-around ">
                <div class="flex  flex-wrap justify-center items-center space-x-3 flex-none bg-white shadow-2xl w-80 h-96">
                    <p class="bg-red-400 h-20 w-20 ">Cards</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                    <p class="bg-red-400 h-20 w-20 ">2</p>
                </div>
                <div class="flex-1 p-6">
                    <table class="table-auto min-w-full border-2  divide-y divide-blue-900">
                        <thead>
                            <tr>
                                <th>SN</th>
                                <th>Name</th>
                                <th>Address</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Ram </td>
                                <td>Ratnanagar</td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Shayam</td>
                                <td>Butwal</td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Hari</td>
                                <td>Kathmandu</td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Ravi</td>
                                <td>Pokhara</td>
                            </tr>
                        </tbody>
                    </table>

                    
                      

                </div>
            </div>





            </div>
        </div>
    </div> --}}

    <x-modal name="name"  show=true/>
    </body>
</html>
