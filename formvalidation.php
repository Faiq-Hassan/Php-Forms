<!DOCTYPE html>
<html>
<head>
  <title>PHP Form Validation</title>
</head>
<body>

<?php
// Initialize variables
$name = $email = $website = $comment = $gender = "";
$nameErr = $emailErr = $genderErr = "";

// Function to clean input
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Name validation
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }

  // Email validation
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }

  // Website (optional)
  if (!empty($_POST["website"])) {
    $website = test_input($_POST["website"]);
  }

  // Comment (optional)
  if (!empty($_POST["comment"])) {
    $comment = test_input($_POST["comment"]);
  }

  // Gender validation
  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}
?>

<h2>PHP Form Validation Example</h2>
<p style="color:red;">* required field</p>

<form method="POST" action="">

  Name: <input type="text" name="name" value="<?php echo $name; ?>">
  <span style="color:red;">* <?php echo $nameErr; ?></span>
  <br><br>

  E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
  <span style="color:red;">* <?php echo $emailErr; ?></span>
  <br><br>

  Website: <input type="text" name="website" value="<?php echo $website; ?>">
  <br><br>

  Comment: <br>
  <textarea name="comment"><?php echo $comment; ?></textarea>
  <br><br>

  Gender:
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span style="color:red;">* <?php echo $genderErr; ?></span>
  <br><br>

  <input type="submit" value="Submit">

</form>

<?php
// Show input after submit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<h2>Your Input:</h2>";
  echo "Name: $name <br>";
  echo "Email: $email <br>";
  echo "Website: $website <br>";
  echo "Comment: $comment <br>";
  echo "Gender: $gender <br>";
}
?>

</body>
</html>