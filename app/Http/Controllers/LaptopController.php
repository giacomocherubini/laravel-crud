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
      return view('products.create');
    }


    public function store(Request $request)
    {
      $dati = $request->all();
      $nuovo_laptop = new Laptop();
      $nuovo_laptop->marca = $dati['marca'];
      $nuovo_laptop->modello = $dati['modello'];
      $nuovo_laptop->cpu = $dati['cpu'];
      $nuovo_laptop->prezzo = $dati['prezzo'];
      $nuovo_laptop->save();

      return redirect()->route('laptops.index');
    }


    public function show($laptop_id)
    {
      $laptop = Laptop::find($laptop_id);

      return view('products.show', compact('laptop'));
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
