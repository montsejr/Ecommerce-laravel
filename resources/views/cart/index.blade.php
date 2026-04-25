<h2>Carrito</h2>

@php 
    $subtotal = 0; 
@endphp

@foreach($cart as $id => $item)
    <p>
        {{ $item['name'] }} - ${{ $item['price'] }} x {{ $item['quantity'] }}
    </p>

    @php 
        $subtotal += $item['price'] * $item['quantity']; 
    @endphp

    <a href="/cart/remove/{{ $id }}">Eliminar</a>
    <hr>
@endforeach

@php
    $impuesto = $subtotal * 0.16;
    $total = $subtotal + $impuesto;
@endphp

<h3>Subtotal: ${{ $subtotal }}</h3>
<h3>Impuesto (16%): ${{ number_format($impuesto, 2) }}</h3>
<h2>Total: ${{ number_format($total, 2) }}</h2>