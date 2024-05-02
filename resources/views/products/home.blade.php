<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <style>
        body {
            background-color: #f3f4f6;
        }
        .btn {
            background-color: #4f46e5;
            color: white;
            border-radius: 9999px;
            padding: 12px 24px;
            font-size: 16px;
            transition: background-color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .btn:hover {
            background-color: #4338ca;
        }
    </style>
</head>
<body class="font-sans antialiased">
<div class="min-h-screen flex flex-col items-center justify-center">
    <img src="https://risingwings.in/images/services/pms.png" alt="PMS Logo" class="rounded-full h-32 w-32 mb-8 shadow-lg">
    <h1 class="text-3xl font-bold mb-6 text-sky-600 text-center">Welcome to PMS</h1>
    <div class="space-y-4">
        <a href="/product/create"><button class="btn">Add Product</button></a>
        <a href="/product"> <button class="btn">View Product</button></a>
        <a href="/productupdate"><button class="btn">Update Product</button></a>



    </div>
</div>
</body>
</html>
