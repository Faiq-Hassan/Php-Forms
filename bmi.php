<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_POST['sumbit'])){
        $name = $_POST['name'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];

        if( empty($name) || $weight <= 0 || $height <= 0){
            echo "The provided information is not according to the requirment ❌";
        }else{
            $heightM = $height / 100;
            $bmi = $weight/($heightM**2);
            $bmi = round($bmi,1);
        };
        if($bmi<18.5){
            $catagorey = "Under Weight";
            $advise = "Eat more nutrition";
        }else if($bmi< 24.9){
            $catagorey = "Normal";
            $advise = "You are prefectely fit";
        }else if( $bmi< 29.9){
            $catagorey = "Overweight";
            $advise = "You have to loose your weight";
        }else{
            $catagorey = "Invalid";
            $advise = "Please enter correct values";
        };
        echo "<h3>$name</h3>";
        echo "<h3>$catagorey</h3>";
        echo "<h3>$advise</h3>";
}
    ?>
    <form method="POST" action="">
        <input type="text" name="name" id="name">
        <input type="number" name="height" id="height">
        <input type="number" name="weight" id="weight">
        <button type="sumbit" name="sumbit">Sumbit</button>
    </form>
</body>
</html>