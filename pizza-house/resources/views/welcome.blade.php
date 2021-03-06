@extends('layouts.layout')

@section('content')
<div class="flex-center position-ref full-height">
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
            <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="content">
    <img src="/img/pizza-house.png" alt="pizza house logo">
        <div class="title m-b-md">
            Ninja Pizza House<br />
            Cyberjaya Best Pizzas
        </div>
        <p class="mssg">{{session('mssg')}}</p>
        <a href="{{ route('pizzas.create')}}">Order a New Pizza.</a><br>
        <a href="{{ route('kebabs.create')}}">Order a New Kebab.</a>
    </div>
</div>
@endsection