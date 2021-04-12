@extends('layouts.app')

@section('content')
<div class="wrapper create-pizza">
<h1>Create a New Kebab</h1>
<form action="/kebabs" method="POST">
@csrf
<label for="name">Name:</label>
<input type="text" name="name" id="name">

<label for="type">Choose pizza type:</label>
<select name="type" id="type">
<option value="kebab margarita">Margarita</option>
<option value="kebab  hawaiian">Hawaiian</option>
<option value="kebab veg">Vegei</option>
<option value="kebab volcano">Valcano</option>
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
