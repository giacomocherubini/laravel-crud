@extends('layouts.app')

{{-- se è qualcosa di corto posso usare anche questa forma qui senza @endsection --}}
@section('page_title', 'Index di tutti i laptops')

@section('content')
<div class="container mt-5">
  <h1 class="float-left">Laptops</h1>
  <a href="{{ route('laptops.create') }}" class="btn btn-primary float-right">Aggiungi nuovo</a>
  <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Marca</th>
      <th>Modello</th>
      <th>Cpu</th>
      <th>Azioni</th>
      <th class="text-right">Prezzo</th>
    </tr>
  </thead>
  <tbody>

    @forelse ($laptops as $laptop)
      <tr>
        <td>{{ $laptop->id }}</td>
        <td>{{ $laptop->marca}}</td>
        <td>{{ $laptop->modello }}</td>
        <td>{{ $laptop->cpu }}</td>
        <td class="text-right">{{ $laptop->prezzo }}</td>
        <td>
          <a href="{{ route('laptops.show', $laptop->id) }}" class="btn btn-info">Visualizza</a>
        </td>
      </tr>
      @empty
        <p>Non ci sono prodotti</p>
    @endforelse



  </tbody>
</table>


</div>

@endsection
