@extends('layout.app')

@section('page_title,' 'Visualizzazione prodotto')

@section('content')
  <div class="container mt-5">
    <h1>Laptop: {{ $laptop->id }}</h1>
    <ul>
      <li><strong>Marca</strong>{{ $laptop->marca }}</li>
      <li><strong>Modello/strong>{{ $laptop->modello }}</li>
      <li><strong>Cpu</strong>{{ $laptop->cpu }}</li>
      <li><strong>Prezzo</strong>{{ $laptop->prezzo }}</li>
    </ul>
    <a class="btn btn-primary" href="{{ route('laptops.index') }}">Torna alla lista prodotti</a>
  </div>

@endsection
