<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>

    <form action="/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="name" value="{{ $product->name }}" placeholder="Enter name">
        <input type="text" name="description" value="{{ $product->description }}" placeholder="Enter description">
        <input type="text" name="quantity" value="{{ $product->quantity }}" placeholder="Enter quantity">
        <input type="text" name="price" value="{{ $product->price }}" placeholder="Enter price">

        <label>Choose a category:</label>
        <select name="category_id">
            @foreach ($categories as $category)
                <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
            @endforeach
        </select>

        <div>
            <label>Current Image:</label>
            <img src="{{ $product->image ? asset('storage/' . $product->image) : asset('images/default-image.jpg') }}"
                alt="Product Image" width="100">
        </div>

        <label>Upload New Image:</label>
        <input type="file" name="image">

        <button type="submit">Update</button>
    </form>
</body>

</html>
