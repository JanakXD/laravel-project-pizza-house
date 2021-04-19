<!-- page template -->
@extends('layouts.layout')

<!-- page content -->
@section('content')
<div class="form mcard card bg-light text-dark">
<div class="card-header">Order A Pizza</div>
<div class="card-body">
<form action="/pizzas" class="needs-validation" method="POST" novalidate>
    @csrf
  <div class="form-group">
    <label for="name">Your Name</label>
    <input type="name" name="name" class="form-control" placeholder="Name" id="name" required>
    <div class="valid-feedback">Valid.</div>
    <div class="invalid-feedback">Please fill out this field.</div>
  </div>
  <div class="form-group">
    <label for="type">Type</label>
    <select name="type" id="type" class="custom-select">
    <option value="pepperoni pizza">Pepperoni Pizza</option>
    <option value="cheese pizza">Cheese Pizza</option>
    <option value="normal pizza">Normal Pizza</option>
  </select>
  </div>
  <div class="form-group">
    <label for="base">Base</label>
    <select name="base" id="base" class="custom-select">
    <option value="thin & crispy crust">Thin & Crispy Crust</option>
    <option value="thick crust">Thick Crust</option>
    <option value="cheesy crust">Cheesy Crust</option>
  </select>
  </div>
  <div class="form-group form-check">
  </div>
  <fieldset>
    <label>Extra Toppings:</label><br />
    <input type="checkbox" checked="true" name="toppings[]" value="mushrooms"> Mushrooms<br />
    <input type="checkbox" name="toppings[]" value="peppers"> Peppers<br />
    <input type="checkbox" name="toppings[]" value="garlic"> Garlic<br />
    <input type="checkbox" name="toppings[]" value="olives"> Olives<br />
  </fieldset>
  
</div>
<div class="card-footer">
<button type="submit" class="btn btn-success">Order Pizza</button>
</div>
</form>
</div>
<script>
// Disable form submissions if there are invalid fields
(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Get the forms we want to add validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();
</script>
@endsection