<!-- page template -->
@extends('layouts.app')

<!-- page content -->
@section('content')
<div class="container">
<div class="card bg-light text-dark">
<div class="card-header">
    <h1>Order For {{ $pizza->name }}</h1>
</div>
<div class="wrapper pizza-details card-body">
    
    <p class="type">Type - {{ $pizza->type }}</p>
    <p class="base">Base - {{ $pizza->base }}</p>
    <p class="toppings">Extra Toppings :</p>
    <ul>
        @foreach($pizza->toppings as $topping)
            <li>{{ $topping }}</li>
        @endforeach
    </ul>
</div>
<div class="card-footer">
    <form action="/pizzas/{{ $pizza->id }}" method="POST">
        @csrf
        @method('DELETE')
        <button class="btn btn-success">Complete Order</button></form>
    </div>
</div>
</div>
<center><a href="/pizzas" class="btn mar btn-info">Go back to Pizzas</a></center>
@endsection