@extends('layouts.layout')

@section('content')
    <div class="flex-center positon-ref full-height">
    <div class="content">
    <div class="title m-b-md">Pizza List</div>
    
    <p>Pizza Name: {{ $name}}</p>
    <p>Car: {{ $car }}</p>
    @foreach($pizzas as $pizza)
    <div>
    {{ $loop->index }} {{ $pizza['type']}} - {{ $pizza['base']}}
    
    @if( $loop->first)
    <span>- first in the loop</span>
    @endif

    @if( $loop->last)
    <span>- last in the loop</span>
    @endif
    </div>
    @endforeach


    </div>
    </div>
@endsection
