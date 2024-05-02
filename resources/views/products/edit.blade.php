<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.7/dist/tailwind.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #3B82F6;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #2563EB;
        }
    </style>
</head>
<body>
<div class="container">
    <h1 class="text-4xl font-bold mb-4 text-center">Edit Product</h1>
    <form action="{{route('product.update',['product'=>$product])}}" method="post">
        {{ csrf_field() }}
        @method('PUT')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Name" value="{{$product->name}}">
        </div>
        <div>
            <label for="qty">Qty</label>
            <input type="text" name="qty" id="qty" placeholder="Qty" value="{{$product->qty}}">
        </div>

        <div>
            <label for="price">Price</label>
            <input type="text" name="price" id="price" placeholder="Price" value="{{$product->price}}">
        </div>
        <div>
            <label for="description">Description</label>
            <input type="text" name="description" id="description" placeholder="Description" value="{{$product->description}}">
        </div>
        <div>
            <input type="submit" value="Update" class="mt-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </div>
    </form>
</div>

</body>
</html>
