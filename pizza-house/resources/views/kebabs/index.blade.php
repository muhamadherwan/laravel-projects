@extends('layouts.app')

@section('content')
<div class="wrapper pizza-index">
  <h1>Kebab Orders</h1>
  @foreach($kebabs as $kebab)
    <div class="pizza-item">
      <img src="/img/pizza.png" alt="pizza icon">
      <h4><a href="/kebabs/{{ $kebab->id }}">{{ $kebab->name }}</a></h4>
    </div>
  @endforeach

</div>

@endsection