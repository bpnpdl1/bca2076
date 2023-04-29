@extends('layouts.app')

@section('content')
<pre>
    @php
       print_r($product ->toArray()) ;
    @endphp
</pre>

@endsection