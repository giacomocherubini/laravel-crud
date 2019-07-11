@extends('layouts.app')

{{-- se è qualcosa di corto posso usare anche questa forma qui senza @endsection --}}
@section('page_title', 'Index di tutti i laptops')

@section('content')
<div class="container mt-5">
  <h1>Laptops</h1>

  <table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Marca</th>
      <th>Modello</th>
      <th>Prezzo</th>
    </tr>
  </thead>
  <tbody>

    @forelse ($laptops as $laptop)
      <tr>
        <td>{{ $laptop->id }}</td>
        <td>{{ $laptop->Marca}}</td>
        <td>{{ $laptop->Modello }}</td>
        <td>{{ $laptop->prezzo }}</td>
      </tr>
      @empty
        <p>Non ci sono prodotti</p>
    @endforelse



  </tbody>
</table>


</div>

@endsection
