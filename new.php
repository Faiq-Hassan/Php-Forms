<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>Payment Calculator</h1>
    <?php 
    $noteBook = 1000;
    $pen = 500;
    $total = $noteBook + $pen;
    $tax = $total*0.17;
    $grand = $total + $tax;
    echo "Notebook : $noteBook <br> Pen : $pen <br> Sub-Total : $total <br> Tax : $tax <br> Grand Total : $grand";
    ?>
    </div>
</body>
</html>