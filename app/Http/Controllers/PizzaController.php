<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Pizza;


class PizzaController extends Controller
{
    public function index() {
        // get data from db
        // $pizzas = Pizza::all();
        // $pizzas = pizza::orderBy('name', 'desc')->get();
        // $pizzas = pizza::where('type', 'cheese pizza')->get();
        $pizzas = pizza::latest()->get();

        return view('pizzas.index', ['pizzas' => $pizzas, 'name' => request('name'), 'age' => request('age')]);

    }

    public function show($id) {
        //get id to qurey data from db
        $pizza = Pizza::findOrFail($id);
        
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        return view('pizzas.create');
    }

    public function store()
    {
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        if (request('toppings') == null) {
            $pizza->toppings = [];
        } else {
            $pizza->toppings = request('toppings');
        }
        $pizza->save();

        return redirect('/')->with('msg', 'Thanks For Ordering');
    }

    public function destroy($id)
    {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();

        return redirect('/pizzas');
    }
}