<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $item1 = "Notebook";
    $price1 = 150.00;
    $item2 = "Pen";
    $price2 = 30.00;
    $item3 = "Eraser";
    $price3 = 20.00;

    $subtotal = $price1 + $price2 + $price3;
    $tax = $subtotal * 0.17;
    $grand = $subtotal + $tax;

    ?>
    <!-- ===== TASK 2 ===== -->
    <div class="task">
        <div class="task-title">
            <span class="badge medium">⭐⭐ Medium</span>
            Task 2 — Shop Bill Calculator
        </div>
        <div class="row"><span class="label"><?php echo $item1; ?></span><span class="value">Rs.
                <?php echo number_format($price1,); ?></span></div>
        <div class="row"><span class="label"><?php echo $item2; ?></span><span class="value">Rs.
                <?php echo number_format($price2, ); ?></span></div>
        <div class="row"><span class="label"><?php echo $item3; ?></span><span class="value">Rs.
                <?php echo number_format($price3, ); ?></span></div>
        <hr class="divider">
        <div class="row"><span class="label">Subtotal</span> <span class="value">Rs.
                <?php echo number_format($subtotal, ); ?></span></div>
        <div class="row"><span class="label">Tax (17%)</span> <span class="value">Rs.
                <?php echo number_format($tax, ); ?></span></div>
       <?php echo number_format($grand, ); ?>
    </div>

</body>

</html>