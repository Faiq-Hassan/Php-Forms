<?php
// ================================================
//   ALL PHP TASKS IN ONE FILE
//   Task 1, 2, 3, 4 + Bonus Visiting Card
// ================================================

// ------------------------------------------------
// TASK 1 — My Introduction
// ------------------------------------------------
$name    = "bilal Hassan";
$age     = 20;
$city    = "Lahore";
$subject = "PHP";

// ------------------------------------------------
// TASK 2 — Shop Bill Calculator
// ------------------------------------------------
$item1  = "Notebook";  $price1 = 150.00;
$item2  = "Pen";       $price2 = 30.00;
$item3  = "Eraser";    $price3 = 20.00;

$subtotal = $price1 + $price2 + $price3;
$tax      = $subtotal * 0.17;
$grand    = $subtotal + $tax;

// ------------------------------------------------
// TASK 3 — Data Types
// ------------------------------------------------
$myString = "Hello";
$myInt    = 25;
$myFloat  = 3.14;
$myBool   = true;
$myArray  = ["cat", "dog", "fish"];

// ------------------------------------------------
// TASK 4 — Report Card
// ------------------------------------------------
$math      = 85;
$english   = 72;
$science   = 60;
$urdu      = 45;
$islamiat  = 90;

$total      = $math + $english + $science + $urdu + $islamiat;
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

// ------------------------------------------------
// BONUS — Visiting Card
// ------------------------------------------------
$full_name = "Ali Hassan";
$job_title = "Web Developer";
$phone     = "0300-1234567";
$email     = "ali@example.com";
$social    = "@ali_codes";
$skills    = ["PHP", "HTML", "CSS", "JavaScript"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>All PHP Tasks</title>
  <style>
    * { box-sizing: border-box; margin: 0; padding: 0; }
    body {
      font-family: sans-serif;
      background: #f0f2f5;
      color: #1a1a1a;
      padding: 30px 20px;
    }
    h1 {
      text-align: center;
      font-size: 26px;
      margin-bottom: 30px;
      color: #1e3a5f;
    }
    .task {
      background: #ffffff;
      border-radius: 14px;
      padding: 24px;
      margin-bottom: 24px;
      box-shadow: 0 2px 10px rgba(0,0,0,0.08);
      max-width: 640px;
      margin-left: auto;
      margin-right: auto;
    }
    .task-title {
      font-size: 14px;
      font-weight: 500;
      margin-bottom: 14px;
      padding-bottom: 10px;
      border-bottom: 1px solid #eee;
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .badge {
      display: inline-block;
      font-size: 11px;
      padding: 2px 10px;
      border-radius: 20px;
      font-weight: 500;
    }
    .easy   { background: #EAF3DE; color: #27500A; }
    .medium { background: #FAEEDA; color: #633806; }
    .hard   { background: #FCEBEB; color: #791F1F; }
    .bonus  { background: #EEEDFE; color: #3C3489; }
    .row {
      display: flex;
      justify-content: space-between;
      padding: 6px 0;
      font-size: 15px;
      border-bottom: 1px solid #f4f4f4;
    }
    .row:last-child { border-bottom: none; }
    .row .label { color: #666; }
    .row .value { font-weight: 500; }
    .divider {
      border: none;
      border-top: 2px solid #eee;
      margin: 10px 0;
    }
    .total-row {
      display: flex;
      justify-content: space-between;
      font-size: 16px;
      font-weight: 500;
      padding: 8px 0 0;
      color: #1e3a5f;
    }
    .type-pill {
      display: inline-block;
      background: #e8f0fe;
      color: #1a56db;
      font-size: 11px;
      padding: 2px 8px;
      border-radius: 10px;
      margin-left: 8px;
    }
    .grade-badge {
      display: inline-block;
      padding: 4px 16px;
      border-radius: 20px;
      font-size: 18px;
      font-weight: 500;
    }
    .grade-A    { background: #EAF3DE; color: #27500A; }
    .grade-B    { background: #FAEEDA; color: #633806; }
    .grade-C    { background: #FEF3CD; color: #7a5200; }
    .grade-Fail { background: #FCEBEB; color: #791F1F; }

    /* Visiting Card */
    .vcard {
      background: linear-gradient(135deg, #1e3a5f, #2563a8);
      color: white;
      border-radius: 16px;
      padding: 28px;
    }
    .vcard h2 { font-size: 22px; margin-bottom: 4px; }
    .vcard .jobtitle { color: #90caf9; font-size: 14px; margin-bottom: 18px; }
    .vcard .info-row { font-size: 14px; margin: 5px 0; display: flex; gap: 8px; }
    .vcard .info-row span { opacity: 0.75; }
    .vcard .skills-label { color: #90caf9; font-size: 12px; margin: 16px 0 6px; }
    .skill-tag {
      display: inline-block;
      background: rgba(255,255,255,0.15);
      color: white;
      font-size: 12px;
      padding: 3px 10px;
      border-radius: 12px;
      margin: 3px 3px 0 0;
    }
  </style>
</head>
<body>

<h1>All PHP Tasks</h1>

<!-- ===== TASK 1 ===== -->
<div class="task">
  <div class="task-title">
    <span class="badge easy">⭐ Easy</span>
    Task 1 — My Introduction
  </div>
  <div class="row"><span class="label">Name</span>            <span class="value"><?php echo $name; ?></span></div>
  <div class="row"><span class="label">Age</span>             <span class="value"><?php echo $age; ?> years old</span></div>
  <div class="row"><span class="label">City</span>            <span class="value"><?php echo $city; ?></span></div>
  <div class="row"><span class="label">Favourite Subject</span><span class="value"><?php echo $subject; ?></span></div>
  <p style="margin-top:14px;font-size:14px;color:#444;">
    My name is <strong><?php echo $name; ?></strong>. I am <strong><?php echo $age; ?></strong> years old.
    I live in <strong><?php echo $city; ?></strong>. My favourite subject is <strong><?php echo $subject; ?></strong>.
  </p>
</div>

<!-- ===== TASK 2 ===== -->
<div class="task">
  <div class="task-title">
    <span class="badge medium">⭐⭐ Medium</span>
    Task 2 — Shop Bill Calculator
  </div>
  <div class="row"><span class="label"><?php echo $item1; ?></span><span class="value">Rs. <?php echo number_format($price1, 2); ?></span></div>
  <div class="row"><span class="label"><?php echo $item2; ?></span><span class="value">Rs. <?php echo number_format($price2, 2); ?></span></div>
  <div class="row"><span class="label"><?php echo $item3; ?></span><span class="value">Rs. <?php echo number_format($price3, 2); ?></span></div>
  <hr class="divider">
  <div class="row"><span class="label">Subtotal</span>  <span class="value">Rs. <?php echo number_format($subtotal, 2); ?></span></div>
  <div class="row"><span class="label">Tax (17%)</span> <span class="value">Rs. <?php echo number_format($tax, 2); ?></span></div>
  <div class="total-row"><span>Grand Total</span><span>Rs. <?php echo number_format($grand, 2); ?></span></div>
</div>

<!-- ===== TASK 3 ===== -->
<div class="task">
  <div class="task-title">
    <span class="badge medium">⭐⭐ Medium</span>
    Task 3 — Data Type Detective
  </div>
  <div class="row">
    <span class="label"><?php echo $myString; ?> <span class="type-pill"><?php echo gettype($myString); ?></span></span>
  </div>
  <div class="row">
    <span class="label"><?php echo $myInt; ?> <span class="type-pill"><?php echo gettype($myInt); ?></span></span>
  </div>
  <div class="row">
    <span class="label"><?php echo $myFloat; ?> <span class="type-pill"><?php echo gettype($myFloat); ?></span></span>
  </div>
  <div class="row">
    <span class="label"><?php echo ($myBool ? "true" : "false"); ?> <span class="type-pill"><?php echo gettype($myBool); ?></span></span>
  </div>
  <div class="row">
    <span class="label">[<?php echo implode(", ", $myArray); ?>] <span class="type-pill"><?php echo gettype($myArray); ?></span></span>
  </div>
</div>

<!-- ===== TASK 4 ===== -->
<div class="task">
  <div class="task-title">
    <span class="badge hard">⭐⭐⭐ Challenge</span>
    Task 4 — Student Report Card
  </div>
  <div class="row"><span class="label">Math</span>     <span class="value"><?php echo $math; ?> / 100</span></div>
  <div class="row"><span class="label">English</span>  <span class="value"><?php echo $english; ?> / 100</span></div>
  <div class="row"><span class="label">Science</span>  <span class="value"><?php echo $science; ?> / 100</span></div>
  <div class="row"><span class="label">Urdu</span>     <span class="value"><?php echo $urdu; ?> / 100</span></div>
  <div class="row"><span class="label">Islamiat</span> <span class="value"><?php echo $islamiat; ?> / 100</span></div>
  <hr class="divider">
  <div class="row"><span class="label">Total</span>      <span class="value"><?php echo $total; ?> / 500</span></div>
  <div class="row"><span class="label">Percentage</span> <span class="value"><?php echo $percentage; ?>%</span></div>
  <div class="row">
    <span class="label">Grade</span>
    <span class="value">
      <span class="grade-badge grade-<?php echo $grade; ?>"><?php echo $grade; ?></span>
    </span>
  </div>
</div>

<!-- ===== BONUS ===== -->
<div class="task">
  <div class="task-title">
    <span class="badge bonus">🏆 Bonus</span>
    Visiting Card
  </div>
  <div class="vcard">
    <h2><?php echo $full_name; ?></h2>
    <p class="jobtitle"><?php echo $job_title; ?></p>
    <div class="info-row"><span>📞</span><?php echo $phone; ?></div>
    <div class="info-row"><span>✉️</span><?php echo $email; ?></div>
    <div class="info-row"><span>🐦</span><?php echo $social; ?></div>
    <p class="skills-label">SKILLS</p>
    <?php foreach ($skills as $skill): ?>
      <span class="skill-tag"><?php echo $skill; ?></span>
    <?php endforeach; ?>
  </div>
</div>

</body>
</html>
