<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Card</title>
</head>
<body>
    <?php
    $name = "Bilal";
    $rollno = 89;
    $math = 90;
    $english = 95;
    $comp = 100;
    $phy = 50;
    $islamic = 80;
    $total = $math + $english + $comp + $phy + $islamic;
    $percentage = ($total / 500) * 100;
    ?>
    <h1>Report Card</h1>
    <p>Name: <?php echo $name; ?></p>
    <p>Roll No: <?php echo $rollno; ?></p>
    <p>Total: <?php echo $total; ?></p>
    <p>Percentage: <?php echo $percentage; ?>%</p>
    <?php
    if($percentage >= 90){
        echo "<p>Grade: A+</p>";
        echo "<p>Passed</p>";
    } elseif ($percentage >= 80) {
        echo "<p>Grade: A</p>";
        echo "<p>Passed</p>";
    } elseif ($percentage >= 65) {
        echo "<p>Grade: B</p>";
        echo "<p>Passed</p>";
    } elseif ($percentage >= 50) {
        echo "<p>Grade: C</p>";
        echo "<p>Passed</p>";
    } else {
        echo "<p>Grade: F</p>";
    }
    ?>
</body>
</html>