<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <style>
        body{
            background-color: linear;
        }
    </style> -->
</head>
<body>
    <?php
    $name = "Hussnain";
    $roll = 197;
    $math = 85;
    $english = 90;
    $science = 88;
    $urdu = 92;
    $computer = 95;
    $total = $math + $english + $science + $urdu + $computer;
    $percentage = ($total / 500) * 100;
    $grade = "A=";
    $status = "Pass";
    if($percentage >= 50){
        $grade = "A+";
    } elseif($total >= 400 && $total < 500){
        $grade = "B" ;
    }
    // $status = ($percentage >= 50) ? "passed" : "failed";
    ?>
    <div class="card">
        <h2>Result Card: <?php echo $name; ?></h2>
        <div class="row">
            <span class="label">Name :<?php echo $name; ?></span>
        </div>
        <div class="row">
            <span class="label">Roll Number : <?php echo $roll; ?></span>
        </div>
        <div class="row">
            <span class="label">Total: <?php echo $total; ?></span>
        </div>
        <div class="row">
            <span class="label">Percentage: <?php echo $percentage; ?>%</span>
        </div>
        <div class="row">
            <span class="label">Grade: <?php echo $grade; ?></span>
        </div>
        <div class="row">
            <span class="label">Status: <?php echo $status; ?></span>
        </div>
    </div>
    
</body>
</html>