<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: black;
        }
        
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px auto;
            width: 300px;
            margin: 20px auto;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .row {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        /* .paragraph {
            margin-top: 20px;
            font-size: 16px;
            space-between: 10px;
        } */
    </style> 
</head>
<body>
    <?php
    $item1 = "Laptop";
    $price1 = 150000;
    $item2 = "Smartphone";
    $price2 = 50000;
    // $item3 = "Headphones";
    // $price3 = 10000;

    $subtotal = $price1 + $price2 + $price3;
    $tax = $subtotal * 0.17;
    $grandTotal = $subtotal + $tax;
    ?>

    <div class="card">
        <div class="task">
            <div class="task-title">
                <span class="badge medium">Medium</span>
                Task 2 - shop bill Calculator
            </div>
            <div class="row"><span class="label"><?php echo $item1; ?></span><span class="value">Rs. 
                <?php echo number_format($price1, 2); ?></span></div>
            <div class="row"><span class="label"><?php echo $item2;?></span><span class="value">Rs. 
                <?php echo number_format($price2, 2); ?></span></div>
            <!-- <div class="row"><span class="label"><?php echo $item3;?></span><span class="value">Rs. 
                <?php echo number_format($price3, 2); ?></span></div> -->
            <hr class="divider">    
            <div class="row"><span class="label">Subtotal:</span><span class="value">Rs. 
                <?php echo number_format($subtotal, 2); ?></span></div>
            <div class="row"><span class="label">Tax (17%):</span><span class="value">Rs. 
                <?php echo number_format($tax, 2); ?></span></div>
            <div class="row"><span class="label">Grand Total:</span><span class="value">Rs. 
                <?php echo number_format($grandTotal, 2); ?></span></div>
        </div>
    </div>
</body>
</html>