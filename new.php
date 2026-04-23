<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            border: 1px solid #ccc;
            padding: 10px;
            margin: 20px auto;
            width: 300px;
            margin: 20px auto;
            border-radius: 5px;
            box-shadow: 0 23px 5px rgba(0,0,0,0.1);
        }
        .row {
            margin-bottom: 10px;
            display: flex;
            justify-content: space-between;
        }
        .paragraph {
            margin-top: 20px;
            font-size: 16px;
            space-between: 10px;
        }
    </style> 
</head>
<body>
    <!-- <?php
    $name = "John Doe";
    $age = 30;
    $city = "New York";
    echo "My name is $name, I am $age years old and I live in $city.";
    ?> -->
    <div class="card">
        <div class="row">
            <b>Name:</b> 
            <span><?php echo $name; ?></span>
        </div>
        <div class="row">
            <b>Age:</b> 
            <span><?php echo $age; ?> years old</span>
        </div>
        <div class="row">
            <b>City:</b> 
            <span><?php echo $city; ?></span>
        </div>
        <p class="paragraph">My name is <?php echo $name; ?>, I am <?php echo $age; ?> years old and I live in <?php echo $city; ?>.

        </p>
    </div>
</body>
</html>