<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "hello " ;
    
    $name = "usman";
    $age = 20;
    $city = "karachi";
    echo "name:" .  $name."<br>";
    
    echo "age:" . $age."<br>";
    echo "city:" . $city."<br>";
    echo "my name is $name and i am $age years old and i live in $city";


    $item1 = "laptop";
    $price1 = 50000;
    $item2 = "mobile";
    $price2 = 45000;
    $total = $price1 + $price2;
    $tax = $total * 0.1;
    $final_price = $total + $tax;
    echo "item1: $item1, price: $price1 <br>";
    echo "item2: $item2, price: $price2 <br>";
    echo "total: $total <br>";
    echo "tax: $tax <br>";
    echo "final price: $final_price <br>";
    

    ?>
</body> 
</html>
