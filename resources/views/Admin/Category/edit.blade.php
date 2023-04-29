@extends('layouts.app')
@section('content')

<pre>
    @php
print_r($category->toArray()) ;
    @endphp
</pre>

@endsection