<h1>Detalle del producto</h1>

<p>Nombre: {{ $product->name }}</p>
<p>Descripción: {{ $product->description }}</p>
<p>Precio: ${{ $product->price }}</p>
<p>Stock: {{ $product->stock }}</p>

<a href="{{ route('products.index') }}">Volver</a>