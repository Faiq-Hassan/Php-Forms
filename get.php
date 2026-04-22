<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="GET" action="search.php">
        <input type="text" name="query" placeholder="Search...">
        <button type="submit">Search</button>
    </form>

    <?php
    // Read GET data — visible in URL as ?query=php
    if (isset($_GET['query'])) {
        $search = $_GET['query'];
        echo "You searched for: " . $search;
    }
    ?>


    <form method="POST" action="welcome.php">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="submit">Login</button>
    </form>

    <?php
    // Read POST data — password NEVER shown in URL
    if (isset($_POST['submit'])) {

        $username = $_POST['username'];
        $password = $_POST['password'];

        echo "Hello, " . $username;
        // NEVER echo the password! We'll hash it on.
    }
    ?>




</body>

</html>