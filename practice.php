<!DOCTYPE html>
<html lang="en">

<head>=
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>|Bilallllllll</title>
</head>

<body>
  <?php
  $full_name = "Ali Hassan";
  $job_title = "Web Developer";
  $phone = "0300-1234567";
  $email = "ali@example.com";
  $social = "@ali_codes";
  $skills = ["PHP", "HTML", "CSS", "JavaScript"];
  ?>

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
     <div class="info-row"><span>🐦</span><?php echo $skills[0]; ?></div>
     <div class="info-row"><span>🐦</span><?php echo $skills[1]; ?></div>
     <div class="info-row"><span>🐦</span><?php echo $skills[2]; ?></div>
     <div class="info-row"><span>🐦</span><?php echo $skills[3]; ?></div>=
 </div>
</div>
</body>

</html>