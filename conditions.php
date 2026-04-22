<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Rock Paper Scissors</title>

  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      text-align: center;
      padding: 50px;
    }

    .container {
      background: white;
      padding: 30px;
      max-width: 400px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h1 {
      margin-bottom: 20px;
    }

    select,
    button {
      padding: 10px;
      font-size: 16px;
      margin-top: 10px;
      width: 100%;
    }

    .result {
      margin-top: 20px;
      padding: 15px;
      background: #eee;
      border-radius: 8px;
    }
  </style>
</head>

<body>

  <div class="container">
    <h1>Rock Paper Scissors</h1>

    <form method="POST">
      <select name="user_choice" required>
        <option value="">Select Move</option>
        <option value="Rock">Rock</option>
        <option value="Paper">Paper</option>
        <option value="Scissors">Scissors</option>
      </select>

      <button type="submit">Play Game</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

      $user = $_POST["user_choice"];

      $choices = ["Rock", "Paper", "Scissors"];
      $computer = $choices[array_rand($choices)];

      echo "<div class='result'>";
      echo "<p><strong>You:</strong> $user</p>";
      echo "<p><strong>Computer:</strong> $computer</p>";

      if ($user == $computer) {
        echo "<h2>It's a Draw!</h2>";
      } else if ($user == "Rock" && $computer == "Scissors") {
        echo "<h2>You Win!</h2>";
      } else if ($user == "Paper" && $computer == "Rock") {
        echo "<h2>You Win!</h2>";
      } else if ($user == "Scissors" && $computer == "Paper") {
        echo "<h2>You Win!</h2>";
      } else {
        echo "<h2>Computer Wins!</h2>";
      }

      echo "</div>";
    }
    ?>

  </div>

</body>

</html>