<!-- page template -->
@extends('layouts.app')

<!-- page content -->
@section('content')
<center>
<div class="display-4 m-b-md">
    Pizza List<br />
</div></center>
<div class="container">

@foreach($pizzas as $pizza)
    <div class="card mcard bg-light text-dark">
        <div class="card-body">
        <h4 class="card-title">{{ $pizza->name }}</h4>
        <p class="card-text">Ordered At : {{ $pizza->created_at }}</p>
        <a href="/pizzas/{{ $pizza->id }}" class="btn btn-success stretched-link">See Details</a>
        </div>
    </div>
@endforeach

</div>
@endsection