<?php
// Step 1: Questions array
$questions = [
  [
    'question' => "What does PHP stand for?",
    'options'  => [
      'a' => "Personal Home Page",
      'b' => "Hypertext Preprocessor",
      'c' => "Private Hyperlink Protocol",
      'd' => "None of the above"
    ],
    'answer'   => 'b'
  ],
  [
    'question' => "Which symbol is used to start a variable in PHP?",
    'options'  => [
      'a' => "#",
      'b' => "&",
      'c' => "$",
      'd' => "@"
    ],
    'answer'   => 'c'
  ],
  [
    'question' => "Which function is used to display output in PHP?",
    'options'  => [
      'a' => "print()",
      'b' => "echo",
      'c' => "write()",
      'd' => "show()"
    ],
    'answer'   => 'b'
  ],
  [
    'question' => "PHP files usually have which extension?",
    'options'  => [
      'a' => ".html",
      'b' => ".js",
      'c' => ".css",
      'd' => ".php"
    ],
    'answer'   => 'd'
  ],
  [
    'question' => "Which superglobal is used to collect form data sent with POST?",
    'options'  => [
      'a' => '$_GET',
      'b' => '$_POST',
      'c' => '$_SESSION',
      'd' => '$_SERVER'
    ],
    'answer'   => 'b'
  ]
];

$score = 0;
$grade = "";
$results = [];

if (isset($_POST['submit'])) {
  foreach ($questions as $i => $q) {
    $userAnswer = $_POST['q' . $i] ?? '';
    $correctAnswer = $q['answer'];

    if ($userAnswer === $correctAnswer) {
      $score++;
      $results[$i] = "correct";
    } else {
      $results[$i] = "wrong";
    }
  }

  if ($score == 5) {
    $grade = "A+";
  } elseif ($score == 4) {
    $grade = "A";
  } elseif ($score == 3) {
    $grade = "B";
  } elseif ($score == 2) {
    $grade = "C";
  } elseif ($score == 1) {
    $grade = "D";
  } else {
    $grade = "F";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Quiz App</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    body {
      background: linear-gradient(135deg, #667eea, #764ba2);
      min-height: 100vh;
      padding: 40px 15px;
    }

    .quiz-container {
      max-width: 850px;
      margin: auto;
      background: #fff;
      border-radius: 18px;
      padding: 30px;
      box-shadow: 0 15px 40px rgba(0,0,0,0.15);
    }

    .quiz-title {
      text-align: center;
      font-size: 32px;
      margin-bottom: 10px;
      color: #222;
    }

    .quiz-subtitle {
      text-align: center;
      color: #666;
      margin-bottom: 30px;
    }

    .question-box {
      background: #f8f9ff;
      border: 1px solid #e6e9ff;
      border-radius: 14px;
      padding: 20px;
      margin-bottom: 20px;
    }

    .question-box h3 {
      font-size: 20px;
      margin-bottom: 15px;
      color: #222;
    }

    .option {
      display: block;
      padding: 12px 15px;
      margin-bottom: 10px;
      background: #fff;
      border: 1px solid #dcdcdc;
      border-radius: 10px;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .option:hover {
      border-color: #667eea;
      background: #f3f5ff;
    }

    .option input {
      margin-right: 10px;
    }

    .submit-btn {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 12px;
      background: linear-gradient(135deg, #667eea, #764ba2);
      color: #fff;
      font-size: 18px;
      font-weight: bold;
      cursor: pointer;
      transition: 0.3s ease;
    }

    .submit-btn:hover {
      opacity: 0.92;
      transform: translateY(-1px);
    }

    .result-box {
      margin-bottom: 25px;
      padding: 20px;
      border-radius: 14px;
      background: #f4f7ff;
      border: 1px solid #dbe3ff;
    }

    .result-box h2 {
      margin-bottom: 10px;
      color: #222;
    }

    .result-item {
      margin-bottom: 8px;
      font-size: 16px;
    }

    .correct {
      color: #198754;
      font-weight: bold;
    }

    .wrong {
      color: #dc3545;
      font-weight: bold;
    }

    .score-line {
      margin-top: 15px;
      font-size: 20px;
      font-weight: bold;
      color: #333;
    }
  </style>
</head>
<body>

  <div class="quiz-container">
    <h1 class="quiz-title">PHP Quiz App</h1>
    <p class="quiz-subtitle">Answer all questions and check your result</p>

    <?php if (isset($_POST['submit'])): ?>
      <div class="result-box">
        <h2>Quiz Result</h2>

        <?php foreach ($questions as $i => $q): ?>
          <div class="result-item">
            Q<?php echo $i + 1; ?>:
            <?php if ($results[$i] === "correct"): ?>
              <span class="correct">✅ Correct</span>
            <?php else: ?>
              <span class="wrong">
                ❌ Wrong — Correct answer:
                <?php echo strtoupper($q['answer']) . ") " . $q['options'][$q['answer']]; ?>
              </span>
            <?php endif; ?>
          </div>
        <?php endforeach; ?>

        <div class="score-line">
          Score: <?php echo $score; ?> / <?php echo count($questions); ?> — Grade: <?php echo $grade; ?>
        </div>
      </div>
    <?php endif; ?>

    <form method="POST" action="">
      <?php foreach ($questions as $i => $q): ?>
        <div class="question-box">
          <h3><?php echo ($i + 1) . ". " . $q['question']; ?></h3>

          <?php foreach ($q['options'] as $key => $option): ?>
            <label class="option">
              <input
                type="radio"
                name="q<?php echo $i; ?>"
                value="<?php echo $key; ?>"
                <?php if (isset($_POST['q' . $i]) && $_POST['q' . $i] === $key) echo 'checked'; ?>
              >
              <?php echo strtoupper($key) . ") " . $option; ?>
            </label>
          <?php endforeach; ?>
        </div>
      <?php endforeach; ?>

      <button type="submit" name="submit" class="submit-btn">Submit Quiz</button>
    </form>
  </div>

</body>
</html>