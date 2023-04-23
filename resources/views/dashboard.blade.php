
@extends('layouts.app')

@section('content')
    <div>
        <h2>Dashboard</h2>
    </div>
    <div class="mt-4 grid grid-col grid-cols-3 gap-10">
        <div class="px-4 py-8 rounded-lg bg-blue-600 text-white flex justify-between">
            <p class="font-bold text-lg">Total News</p>
            <p class="font bold text-5xl">600</p>
        </div>

        <div class="px-4 py-8 rounded-lg bg-red-600 text-white flex justify-between">
            <p class="font-bold text-lg">Total Categories</p>
            <p class="font-bold text-5xl">8</p>
        </div>

        <div class="px-4 py-8 rounded-lg bg-green-600 text-white flex justify-between">
            <p class="font-bold text-lg">Total Notices</p>
            <p class="font-bold text-">6</p>
        </div>
    </div>

@endsection
