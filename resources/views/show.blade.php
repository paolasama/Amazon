<!-- resources/views/cart/show.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrito de Compras</title>
</head>
<body>
    <h1>Tu Carrito</h1>
    @if(session('cart'))
        <ul>
            @foreach (session('cart') as $compra => $item)
                <li>
                    {{ $item['name'] }} - ${{ $item['price'] }}
                    <form action="{{ route('cart.remove') }}" method="POST" style="display:inline;">
                        @csrf
                        <input type="hidden" name="product_id" value="{{ $compra }}">
                        <button type="submit">Eliminar</button>
                    </form>
                </li>
            @endforeach
        </ul>
        <p>Total: ${{ $total }}</p>
    @else
        <p>Tu carrito está vacío.</p>
    @endif

    <a href="{{ route('products.compra') }}">Ver Productos</a>
</body>
</html>
