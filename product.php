<?php

// Step 1: Products array (array inside array)
$products = [
  ['name' => 'iPhone 15',      'price' => 89000, 'category' => 'Electronics'],
  ['name' => 'Notebook',       'price' => 150,   'category' => 'Stationery'],
  ['name' => 'Office Chair',   'price' => 12500, 'category' => 'Furniture'],
  ['name' => 'Backpack',       'price' => 3200,  'category' => 'Accessories'],
  ['name' => 'Smart Watch',    'price' => 18500, 'category' => 'Electronics'],
  ['name' => 'Water Bottle',   'price' => 900,   'category' => 'Kitchen']
];

// Step 2: Write the function
function getPriceLabel($price) {
  if ($price < 5000) {
    return "Affordable";
  } elseif ($price < 20000) {
    return "Mid-range";
  } else {
    return "Premium";
  }
}

// Step 3: Calculate total
$total = 0;
foreach ($products as $p) {
  $total += $p['price'];
}
?>

<!-- Step 4: HTML Table -->
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>Product</th>
    <th>Category</th>
    <th>Price</th>
    <th>Label</th>
  </tr>

  <?php foreach ($products as $p) : ?>
  <tr>
    <td><?php echo $p['name']; ?></td>
    <td><?php echo $p['category']; ?></td>
    <td><?php echo "Rs. " .number_format ($p['price']); ?></td>
    <td><?php echo getPriceLabel($p['price']); ?></td>
  </tr>
  <?php endforeach; ?>

</table>

<p><?php echo "Total: Rs. " . number_format($total); ?></p>