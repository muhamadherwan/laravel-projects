@extends('layouts.app')

@section('content')
<div class="weapper pizza-details">
<h1>Order for {{ $kebab->name}}</h1>
<p class="type">Type - {{$kebab->type}}</p>
<p class="toppings">Extra toppings:</p>

<ul>
@foreach($kebab->toppings as $topping)
    <li>{{ $topping }}</li>
@endforeach
</ul>

<form action="{{ route('kebabs.destroy', $kebab->id) }}" method="post">
@csrf
@method('DELETE')
<button>Complete Order</button>
</form>
</div>
<a href="/kebabs" class="back">Back to all Kebab.</a>
@endsection
