<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>


   <?php
    if (isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        switch($department){
            case 'sales' :
            $reply = "Our support team will contact you within 24 hours. Ticket #SUP-2025.";
            break;
            case 'support' :
            $reply = "Our support team will contact you within 24 hours. Ticket #SUP-2025.";
            break;
            case 'billing' :
            $reply = "Our support team will contact you within 24 hours. Ticket #SUP-2025.";
            break;
            case 'general' :
            $reply = "Our support team will contact you within 24 hours. Ticket #SUP-2025.";
            break;
            default :
            $reply = "We will get back to you soon.";
        }
        
    }
    ?>



    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <?php
        echo "<h2>Thank you, $name!</h2>";
        echo "Your message has been recieved<br>";
        echo "Department : $department<br>";
        echo "$reply<br>";
        echo "<p>We will reply to :$email</p>"; 
        ?>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form method="POST" action="" class="p-4 p-md-5 border rounded-3 bg-light shadow-sm">
          <div class="mb-3">
            <label for="name" class="form-label fw-semibold">Your Name</label>
            <input type="text" name="name" class="form-control" placeholder="Enter your full name" id="name" required>
          </div>
          <div class="mb-3">
            <label for="email" class="form-label fw-semibold">Your Email</label>
            <input type="email" name="email" class="form-control" placeholder="Enter your email address" id="email" required>
          </div>
          <div class="mb-3">
            <label for="department" class="form-label fw-semibold">Department</label>
            <select name="department" class="form-select" id="department" required>
              <option value="" disabled selected>Select a department</option>
              <option value="sales">Sales</option>
              <option value="support">Support</option>
              <option value="billing">Billing</option>
              <option value="general">General</option>
            </select>
          </div>
          <div class="mb-3">
            <label for="message" class="form-label fw-semibold">Your Message</label>
            <textarea name="message" class="form-control" placeholder="Type your message here..." id="message" rows="4" required></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary w-100 py-2 fw-semibold">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>