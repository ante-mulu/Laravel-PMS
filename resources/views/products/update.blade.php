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
        }
        table {
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ccc;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            text-decoration: none;
        }
        .amazing-btn {
            display: inline-block;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
        }
        .amazing-btn-green {
            background-color: #34D399;
            color: white;
        }
        .amazing-btn-red {
            background-color: #EF4444;
            color: white;
        }
        .amazing-btn:hover {
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <div class="container mx-auto p-4">
        <div class="bg-white rounded-lg shadow-lg p-4">
            <h1 class="text-4xl font-bold mb-4 text-center">Products</h1>
            @if(@session()->has('success'))
            <div class="bg-green-100 text-green-700 p-4 rounded-lg mb-4">
                {{session('success')}}
            </div>
            @endif
            <table class="table-auto w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2">ID</th>
                        <th class="px-4 py-2">Name</th>
                        <th class="px-4 py-2">Qty</th>
                        <th class="px-4 py-2">Price</th>
                        <th class="px-4 py-2">Description</th>
                        <th class="px-4 py-2">Edit</th>
                        <th class="px-4 py-2">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products as $product)
                    <tr>
                        <td class="border px-4 py-2">{{$product->id}}</td>
                        <td class="border px-4 py-2">{{$product->name}}</td>
                        <td class="border px-4 py-2">{{$product->qty}}</td>
                        <td class="border px-4 py-2">{{$product->price}}</td>
                        <td class="border px-4 py-2">{{$product->description}}</td>
                        <td class="border px-4 py-2">
                            <a href="{{route('product.edit', ['product'=>$product])}}" class="amazing-btn amazing-btn-green hover:bg-green-700">Edit</a>
                        </td>
                        <td class="border px-4 py-2">

                            <form method="post" action="{{route('product.delete',['product'=>$product])}}">
                            @csrf
                            @method('DELETE')
                                <input type="submit" value="Delete"  class="amazing-btn amazing-btn-red hover:bg-red-700">
                            </form>

                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
