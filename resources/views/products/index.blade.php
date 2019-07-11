<h1>Laptops</h1>

@forelse ($laptops as $laptop)
  id: {{ $laptop->id }} - Marca: {{ $laptop->Marca}} - Modello: {{ $laptop->Modello }}
  - prezzo: {{ $laptop->prezzo }}
  <br>
@empty
  <p>Non ci sono prodotti</p>
@endforelse
