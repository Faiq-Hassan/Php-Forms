<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product price</title>
</head>
<body>
    <?php
    $products = [
        ['name' => 'Laptop', 'price' => 85000, 'category' => 'Electronics'],
        ['name' => 'book', 'price' => 499.99, 'category' => 'Stationery'],
        ['name' => 'Headphones', 'price' => 10000, 'category' => 'Electronics'],
        ['name' => 'Pen', 'price' => 299.99, 'category' => 'Stationery'],
    ];
        function getPriceLabel($price) {
            if ($price < 5000) {
                return "Affordable";
            } elseif ($price < 7000) {
                return "Mid-range";
            } elseif ($price < 10000) {
                return "Expensive";
            } else {
                return "Luxury";
            }


    $total = 0;
    foreach ($product as $p) {
        $total += $p['price'];
    }
    ?>

    <table border="1">
        <tr>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>label</th>
        </tr>

        <?php foreach ($products as $p): ?>
            <tr>
                <td><?php echo $p['name']; ?></td>
                <td><?php echo $p['category']; ?></td>
                <td><?php echo "Rs." . number_format($p['price']); ?></td>
                <td><?php echo getPriceLabel($p['price']); ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><?php echo "total: Rs." . number_format($total); ?></p>
</body>
</html>