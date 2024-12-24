<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Detail of product</h1>
    <h3>Name: {{ $product->name }}</h3>
    <h3>Description: {{ $product->description }}</h3>
    <h3>Quantity: {{ $product->quantity }}</h3>
    <h3>Price: {{ $product->price }}$</h3>
    <h3>CategoryID: {{ $product->category_id }}</h3>
    <h3>Category name: {{ $product->category->name }}</h3>
    <h3>Category Description: {{ $product->category->description }}</h3>

</body>

</html>
