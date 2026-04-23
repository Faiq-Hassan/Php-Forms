<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        input {
            display: block;
            margin-bottom: 10px;
            padding: 8px;
            width: 100%;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        button {
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        button:hover {
            background-color: #218838;
        }
    </style>
</head>

<body>
    <?php
    if (isset($_POST["submit"])) {

        $name = trim($_POST["name"]);
        $weight = $_POST["weight"];
        $height = $_POST["height"];

        if (empty($name) || $weight <= 0 || $height <= 0) {
            echo "<p style='color:red'> Please fill all feilds!</p>";
        } else {

            $heightM = $height / 100;
            $bmi = $weight / ($heightM ** 2);
            $bmi = round($bmi, 1);

            if ($bmi < 18.5) {
                $category = "Undergraduate";
                $advice = "Eat more nutritions food...";
            } elseif ($bmi > 80) {
                $category = "Overweight";
                $advice = "please follow a healthy diet and exercise regularly.";
            } else {
                $category = "Obese";
                $advice = "please consult a doctor for a personalized weight loss plan.";
            }
            echo "<h3>BMI: $bmi - $category</h3>";
            echo "<p>$advice</p>";
        }
    }
    ?>

    <form method="POST" action="">
        <input type="text" name="name" placeholder="Your Name">
        <input type="text" name="weight" placeholder="Weight (kg)">
        <input type="text" name="height" placeholder="Height (cm)">
        <button type="submit" name="submit">Calculate</button>
    </form>
</body>

</html>