<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        form {
            display: flex;
            flex-direction: column;
            gap: 10px;
            background-color: #333;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 20px 20px 20px rgba(93, 91, 91, 0.1);
        }
        input {
            padding: 10px;
            border: none;
            border-radius: 5px;
            font-size: 16px;
        }
        .post-submit {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .post-submit:hover {
            background-color: #0056b3;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        button {
            background-color: #c21212;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: #b30000;
        }
        
    </style>
</head>
<body>
    <form method="Post">
        <input type="text" name="name" placeholder="Enter your name">
        <input type="number" name="age" placeholder="Enter your age">
        <input type="text" name="city" placeholder="Enter your city">
        <input type="email" name="email" placeholder="Enter your email">
        <button type="submit">Submit</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $age = $_POST["age"];
        $city = $_POST["city"];
        $email = $_POST["email"];

        echo "My name is $name, I am $age years old, I live in $city and my email is $email.";
    }
    ?>
</body>
</html>