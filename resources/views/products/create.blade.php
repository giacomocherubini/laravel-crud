@extends('layouts.app')

@section('page_title', 'inserimento nuovo prodotto')

@section('content')
  <div class="container mt-5">
    <h1>Inserisci un nuovo laptop</h1>
    <form method="post" action="{{ route('laptops.store') }}">
      @csrf
      <div class="form-group">
        <label for="marca">Marca</label>
        <input type="text" class="form-control" name="marca" placeholder="Inserisci la marca">
      </div>
      <div class="form-group">
        <label for="modello">Modello</label>
        <input type="text" class="form-control" name="modello" placeholder="Inserisci il modello">
      </div>
      <div class="form-group">
        <label for="cpu">Cpu</label>
        <input type="text" class="form-control" name="cpu" placeholder="Inserisci il nome della cpu">
      </div>
      <div class="form-group">
        <label for="prezzo">Prezzo</label>
        <input type="text" class="form-control" name="prezzo" placeholder="Inserisci il prezzo">
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>
@endsection
