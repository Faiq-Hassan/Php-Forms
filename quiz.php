<!DOCTYPE html>
<html>

<head>
    <title>PHP Quiz</title>
</head>

<body>

    <?php

    // ── Questions Array ──
    $questions = [
        [
            'question' => "What does PHP stand for?",
            'options' => ['a' => "Personal Home Page", 'b' => "Hypertext Preprocessor", 'c' => "Private Hyperlink Protocol", 'd' => "None"],
            'answer' => 'b'
        ],
        [
            'question' => "Which HTML tag makes text BOLD?",
            'options' => ['a' => "<b> or <strong>", 'b' => "<bold>", 'c' => "<p>", 'd' => "<em>"],
            'answer' => 'a'
        ],
        [
            'question' => "What is the correct way to start a PHP variable?",
            'options' => ['a' => "var name", 'b' => "#name", 'c' => '$name', 'd' => "@name"],
            'answer' => 'c'
        ],
        [
            'question' => "What does == check in PHP?",
            'options' => ['a' => "Value only", 'b' => "Value AND type", 'c' => "Assigns a value", 'd' => "None"],
            'answer' => 'a'
        ],
        [
            'question' => "Which loop is best for going through an array?",
            'options' => ['a' => "while", 'b' => "for", 'c' => "foreach", 'd' => "do-while"],
            'answer' => 'c'
        ],
    ];

    // ── Check Answers After Submit ──
    if (isset($_POST['submit'])) {

        $score = 0;
        echo "<h2>Your Results</h2>";

        foreach ($questions as $i => $q) {
            $userAnswer = $_POST['q' . $i] ?? '';
            $correctAnswer = $q['answer'];
            $qNum = $i + 1;

            if ($userAnswer === $correctAnswer) {
                $score++;
                echo "<p style='color:green'>Q$qNum: ✅ Correct!</p>";
            } else {
                $correct_text = $q['options'][$correctAnswer];
                echo "<p style='color:red'>Q$qNum: ❌ Wrong. Correct: $correct_text</p>";
            }
        }

        // ── Grade using if/elseif ──
        if ($score == 5) {
            $grade = "A+";
        } elseif ($score == 4) {
            $grade = "A";
        } elseif ($score == 3) {
            $grade = "B";
        } elseif ($score == 2) {
            $grade = "C";
        } else {
            $grade = "F";
        }

        // ── Message using switch ──
        switch ($grade) {
            case 'A+':
                $msg = "🏆 Perfect score! Outstanding!";
                break;
            case 'A':
                $msg = "⭐ Excellent work! Almost perfect!";
                break;
            case 'B':
                $msg = "👍 Good effort! Review a couple of topics.";
                break;
            case 'C':
                $msg = "📚 Keep studying! You can do better!";
                break;
            default:
                $msg = "💪 Don't give up! Go back to basics.";
        }

        echo "<hr>";
        echo "<h3>Score: $score / 5 — Grade: $grade</h3>";
        echo "<p>$msg</p>";
    }
    ?>

    <!-- ── HTML Quiz Form ── -->
    <h2>PHP Quiz — 5 Questions</h2>

    <form method="POST" action="">

        <?php foreach ($questions as $i => $q): ?>

            <p><strong>Q<?php echo $i + 1; ?>: <?php echo $q['question']; ?></strong></p>

            <?php foreach ($q['options'] as $key => $option): ?>
                <input type="radio" name="q<?php echo $i; ?>" value="<?php echo $key; ?>">
                <?php echo strtoupper($key) . ") " . $option; ?> <br>
            <?php endforeach; ?>

            <br>

        <?php endforeach; ?>

        <button type="submit" name="submit">Submit Quiz</button>
    </form>

</body>

</html>
