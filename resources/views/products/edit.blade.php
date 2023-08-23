<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
</head>
<body>
    <div class="container">
        <h1>Edit Product</h1>
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')
            <label for="name">Name</label>
            <input type="text" id="name" name="name" value="{{ $product->name }}"><br>
            <label for="price">Price</label>
            <input type="number" id="price" name="price" value="{{ $product->price }}"><br>
            <label for="stock">Stock</label>
            <input type="number" id="stock" name="stock" value="{{ $product->stock }}"><br>
            <label for="type">Type</label>
            <input type="text" id="type" name="type" value="{{ $product->type }}"><br>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
