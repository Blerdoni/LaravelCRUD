<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
            border: 1px solid #ddd;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        td form {
            display: inline-block;
        }
        button {
            padding: 5px 10px;
            background-color: #17b988;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: #0f5d3d;
        }
        button.delete {
            background-color: #e74c3c;
        }
        button.delete:hover {
            background-color: #b33024;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Product List</h1>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Stock</th>
                    <th>Type</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->price }}</td>
                        <td>{{ $product->stock }}</td>
                        <td>{{ $product->type }}</td>
                        <td>
                            <form action="{{ route('products.edit', $product) }}" method="GET">
                                @csrf
                                <button type="submit">Edit</button>
                            </form>
                        </td>
                        
                <td>
                    <form action="{{ route('products.destroy', $product) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form>
                </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
