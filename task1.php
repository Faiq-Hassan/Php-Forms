<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $a=10;
    $b=20;
    $sum = $a + $b;
    $sub = $a - $b;
    $product = $a * $b;
    $quotient = $a / $b;
    $remainder = $a % $b;
    ?>
    <div class="card">
        <h1>Day 2 Tasks</h1>
        <h2>Task 1</h2>
        <div class="sum">
        <?php
        echo "The sum of $a and $b is: $sum";
        ?>
        </div>
        <div class="sub">
            <?php
            echo "The subtraction of $a and $b is: $sub";
            ?>
        </div>
        <div class="product">
            <?php
            echo "The product of $a and $b is: $product";
            ?>
        </div>
        <div class="quotient">
            <?php
            echo "The quotient of $a and $b is: $quotient";
            ?>
        </div>
        <div class="remainder">
            <?php
            echo "The remainder of $a and $b is: $remainder";
            ?>
        </div>
    </div>
</body>
</html>