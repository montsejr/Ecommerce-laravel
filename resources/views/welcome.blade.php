<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raíces de Chiapa | Ecommerce Artesanal</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-cover bg-center bg-fixed min-h-screen"
      style="background-image: url('/images/fondo.jpg');">

    <!-- CAPA OSCURA -->
    <div class="bg-black/60 min-h-screen">

        <!-- HEADER -->
        <header class="border-b-4 border-orange-400 bg-[#7a2e1f]/90 text-white shadow-lg">

            <div class="container mx-auto flex justify-between items-center p-5">

                <!-- TITULO -->
                <div>

                    <h1 class="text-4xl font-extrabold tracking-wide">
                        Raíces de Chiapas
                    </h1>

                    <p class="text-orange-200 text-sm">
                        Artesanías tradicionales de Chiapa de Corzo
                    </p>

                </div>

                <!-- BOTONES -->
                <div class="space-x-3">

                    <a href="/cart"
                       class="bg-orange-500 hover:bg-orange-600 transition px-5 py-2 rounded-lg font-bold shadow-md">
                        🛒 Carrito
                    </a>

                    @auth

                        <a href="/dashboard"
                           class="bg-black hover:bg-gray-800 transition px-5 py-2 rounded-lg font-bold shadow-md">
                            Dashboard
                        </a>

                    @else

                        <a href="/login"
                           class="bg-black hover:bg-gray-800 transition px-5 py-2 rounded-lg font-bold shadow-md">
                            Login
                        </a>

                    @endauth

                </div>

            </div>

            <!-- FLORES / LINEA DECORATIVA -->
            <div class="h-3 bg-gradient-to-r from-orange-500 via-red-500 to-yellow-500"></div>

        </header>

        <!-- HERO -->
        <section class="text-center text-white py-16 px-6">

            <h2 class="text-5xl font-extrabold mb-6 drop-shadow-lg">
                Arte y tradición chiapaneca
            </h2>

            <p class="text-xl max-w-3xl mx-auto text-orange-100">
                Descubre productos hechos a mano por artesanos de Chiapa de Corzo,
                preservando la cultura, tradición y creatividad de nuestra región.
            </p>

        </section>

        <!-- PRODUCTOS -->
        <main class="container mx-auto p-6">

            <h2 class="text-3xl font-bold text-white mb-8 text-center">
                Productos Disponibles
            </h2>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                @foreach($products as $product)

                    <div class="bg-white/95 backdrop-blur rounded-2xl shadow-2xl overflow-hidden hover:scale-105 transition duration-300">

                        <!-- IMAGEN -->
                        @if($product->image)

                            <img src="{{ asset('storage/' . $product->image) }}"
                                 class="w-full h-64 object-cover">

                        @endif

                        <!-- CONTENIDO -->
                        <div class="p-5">

                            <h3 class="text-2xl font-bold text-[#7a2e1f] mb-2">
                                {{ $product->name }}
                            </h3>

                            <p class="text-gray-700 mb-4">
                                {{ $product->description }}
                            </p>

                            <p class="text-2xl font-extrabold text-green-700 mb-5">
                                ${{ $product->price }}
                            </p>

                            <form action="{{ route('cart.add', $product->id) }}" method="POST">

                                @csrf

                                <button class="w-full bg-orange-600 hover:bg-orange-700 transition text-white py-3 rounded-xl font-bold shadow-lg">
                                    Agregar al carrito
                                </button>

                            </form>

                        </div>

                    </div>

                @endforeach

            </div>

        </main>

        <!-- FOOTER -->
        <footer class="mt-16 bg-[#3d1b12]/95 text-white text-center py-6 border-t-4 border-orange-500">

            <p class="text-lg font-bold">
                Sistema de E-commerce para Artesanos de Chiapa de Corzo
            </p>

            <p class="text-orange-200 text-sm mt-2">
                
            </p>

        </footer>

    </div>

</body>
</html>