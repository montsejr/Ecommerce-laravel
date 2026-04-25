<h1>Lista de productos</h1>

<!-- Buscador -->
<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" placeholder="Buscar producto..." value="{{ $search ?? '' }}">
    <button type="submit">Buscar</button>
</form>

<br>

<!-- Botón crear -->
<a href="{{ route('products.create') }}">Crear producto</a>

<br><br>

<!-- Lista de productos -->
<ul>
    @forelse($products as $product)
        <li>
            <strong>{{ $product->name }}</strong> - ${{ $product->price }}

            <br>

            <!-- 👇 IMAGEN -->
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" width="100">
                <br>
            @endif

            <!-- 🛒 BOTÓN AGREGAR AL CARRITO -->
            <form action="/cart/add/{{ $product->id }}" method="POST">
                @csrf
                <button type="submit">Agregar al carrito</button>
            </form>

            <hr>
        </li>
    @empty
        <li>No hay productos registrados</li>
    @endforelse
</ul>

<!-- 🔗 IR AL CARRITO -->
<a href="/cart">Ver carrito</a>