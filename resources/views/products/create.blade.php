<h1>Crear producto</h1>

<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <!-- Nombre -->
    <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}" required><br><br>

    <!-- Descripción -->
    <input type="text" name="description" placeholder="Descripción" value="{{ old('description') }}" required><br><br>

    <!-- Precio -->
    <input type="number" name="price" placeholder="Precio" step="0.01" value="{{ old('price') }}" required><br><br>

    <!-- Stock -->
    <input type="number" name="stock" placeholder="Stock" value="{{ old('stock') }}" required><br><br>

    <!-- Categoría -->
    <label>Categoría:</label>
    <select name="category_id" required>
        <option value="">Selecciona categoría</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id') == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select><br><br>

    <!-- Imagen -->
    <input type="file" name="image"><br><br>

    <!-- Botón -->
    <button type="submit">Guardar</button>
</form>