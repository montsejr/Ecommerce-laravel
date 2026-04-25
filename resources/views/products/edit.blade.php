<h1>Editar producto</h1>

<form action="{{ route('products.update', $product->id) }}" method="POST">
    @csrf
    @method('PUT')

    <input type="text" name="name" value="{{ $product->name }}"><br>
    <input type="text" name="description" value="{{ $product->description }}"><br>
    <input type="number" name="price" value="{{ $product->price }}"><br>
    <input type="number" name="stock" value="{{ $product->stock }}"><br>

    <label>Categoría:</label>
    <select name="category_id" required>
        <option value="">Selecciona categoría</option>
        @foreach($categories as $category)
            <option value="{{ $category->id }}"
                {{ old('category_id', $product->category_id) == $category->id ? 'selected' : '' }}>
                {{ $category->name }}
            </option>
        @endforeach
    </select><br><br>

    <button type="submit">Actualizar</button>
</form>