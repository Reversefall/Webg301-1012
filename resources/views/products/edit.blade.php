<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add new Product</title>
</head>

<body>
    <h1> This is product create page </h1>
    <form action="/products/{{ $product->id }}" method="post">
        @csrf
        <input class = "form-control" type="text" name="name" placeholder="Enter name of product">
        <input class = "form-control" type="text" name="description" placeholder="Enter description of product">
        <input class = "form-control" type="text" name="quantity" placeholder="Enter quantity of product">
        <input class = "form-control" type="text" name="price" placeholder="Enter price of product">

        <button class = "btn btn-primary" type="submit">Submit</button>
    </form>
</body>

</html>
