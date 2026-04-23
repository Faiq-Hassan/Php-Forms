<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $network="jazz";
    switch($network){
        case "jazz":
            echo "Jazz Moblink | Baatain karo dil khol kaay | RS 1.20/min";
        break;
        case "telenor":
            echo "Telenor Pakistan | TalkShalk | RS 1.10/min";
        break;
        case "ufone":
            echo "UFONE | Tum he hoo | RS 0.99/min";
        break;
        default:
        echo "Network Error";
        break;
    }
    ?>
</body>
</html>