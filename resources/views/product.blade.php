@extends('layout.app')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blerdon</title><style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 5px;
            font-weight: bold;
        }
        input {
            padding: 8px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 3px;
            font-size: 14px;
        }
        button {
            padding: 8px;
            background-color: #17b988;
            color: white;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0f5d3d;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <form action="{{ route('products.store') }}" method="POST">
            @csrf

            <input type="text" name="name" placeholder="name"><br>
            <input type="number" name="price" placeholder="price"><br>
            @error('price')
                <div class="alert alert-danger">
                    {{$message}}
                </div>
            @enderror
            <input type="number" name="stock" placeholder="stock"><br>
            <input type="text" name="type" placeholder="type"><br>

            <button type="submit">Submit</button>
        </form>
    </div>

</body>
</html>