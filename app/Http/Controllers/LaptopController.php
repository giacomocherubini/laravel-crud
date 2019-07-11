<?php

namespace App\Http\Controllers;

use App\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{

    public function index()
    {
      $laptops = Laptop::all();
      return view('products.index', compact('laptops'));
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Laptop $laptop)
    {
        //
    }


    public function edit(Laptop $laptop)
    {
        //
    }


    public function update(Request $request, Laptop $laptop)
    {
        //
    }


    public function destroy(Laptop $laptop)
    {
        //
    }
}
