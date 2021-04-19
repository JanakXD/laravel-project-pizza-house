<!-- page template -->
@extends('layouts.app')

<!-- page content -->
@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="content container"><center>
        <div class="display-4 m-b-md">
            <img src="/img/welcome.jpg" herf="#" class="headerimg" alt="Gujarati Pizza House"><br />
            The West's Best Pizzas
        </div>
        <p class="msg">{{ session('msg') }}</p>
        <a href="/pizzas/create" class="btn mar btn-success">Order a Pizza</a></center>
    </div>
</div>
@endsection