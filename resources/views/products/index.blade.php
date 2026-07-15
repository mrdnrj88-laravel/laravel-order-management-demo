<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
</head>
<body>
    <h1>Products</h1>

    @foreach ($products as $product)
        <div>
            <strong>{{ $product->name }}</strong>
            <span>{{ $product->sku }}</span>
        </div>
    @endforeach
</body>
</html>