<?php
$math = 85;
$science = 92;
$english = 78;
$history = 64;
$art = 88;

$total = $math + $science + $english + $history + $art;
$percentage = ($total / 500) * 100;

if ($percentage >= 80) {
    $grade = "A";
} elseif ($percentage >= 65) {
    $grade = "B";
} elseif ($percentage >= 50) {
    $grade = "C";
} else {
    $grade = "Fail";
}

echo $math . "<br>";
echo $science . "<br>";
echo $english . "<br>";
echo $history . "<br>";
echo $art . "<br>";
echo $total . "<br>";
echo $percentage . "<br>" ;

$gradeColor = ($grade == 'Fail') ? 'red' : 'green';
echo $gradeColor;
?>
