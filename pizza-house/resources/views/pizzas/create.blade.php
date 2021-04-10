@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
<h1>Create a New Pizza</h1>
<form action="/pizzas" method="POST">
@csrf
<label for="name">Name:</label>
<input type="text" name="name" id="name">
<label for="type">Choose pizza type:</label>
<select name="type" id="type">
<option value="margarita">Margarita</option>
<option value="hawaiian">Hawaiian</option>
<option value="veg">Vegei</option>
<option value="volcano">Valcano</option>
</select>
<label for="base">Choose base type:</label>
<select name="base" id="base">
    <option value="cheesy crust">Cheesy Crust</option>
    <option value="garlic crust">Garlic Crust</option>
    <option value="thin & crispy">Thin & Crispy</option>
    <option value="thick">Thick</option>
</select>

<fieldset>
<label>Extra Toppings:</label><br>
<input type="checkbox" name="toppings[]" value="mushroom" id="">Musroom<br>
<input type="checkbox" name="toppings[]" value="peppers" id="">Peppers <br>
<input type="checkbox" name="toppings[]" value="garlic" id="">Garlic <br>
<input type="checkbox" name="toppings[]" value="olive" id="">Olive <br>
</fieldset>
<input type="submit" value="Order Pizza">
</form></div>
@endsection
