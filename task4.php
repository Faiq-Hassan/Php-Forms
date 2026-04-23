<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            max-width: 500px;
            margin: 20px auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .task-title {
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .badge {
            background-color: #f39c12;
            color: white;
            padding: 2px 8px;
            border-radius: 4px;
            font-size: 12px;
        }

        .card-content {
            margin-top: 20px;
        }

        form {
            display: flex;
            flex-direction: column;
        }

        input,
        select,
        textarea,
        button {
            margin-bottom: 10px;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button {
            background-color: #3498db;
            color: white;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }
    </style>
</head>

<body>
    <div class="card">
        <div class="task">
            <div class="task-title">
                <span class="badge medium">Medium</span>
                Task 4 - Contact Form
            </div>
            <div class="card-content">
                <?php
                if (isset($_POST['submit'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $department = $_POST['department'];

                    switch ($department) {
                        case 'Sales':
                            $reply = "our sales team will reach you within 2 hours";
                            break;
                        case 'Support':
                            $reply = "thank you for contacting support. We will get back to you within 24 hours.";
                            break;
                        case 'billing':
                            $reply = "thank you for contacting our billing department. We will get back to you within 24 hours.";
                            break;
                        case 'General':
                            $reply = "we will get back to you as soon as possible.";
                            break;
                    }

                    echo "<h2>Thank you, " . htmlspecialchars($name) . "!</h2>";
                    echo "<p>" . htmlspecialchars($reply) . "</p>";
                    echo "<p>We will reply to: " . htmlspecialchars($email) . "</p>";
                }
                ?>

                <form method="POST" action="">
                    <input type="text" name="name" placeholder="Enter your name" required>
                    <input type="email" name="email" placeholder="Enter your email" required>
                    <select name="department" required>
                        <option value="Sales">Sales</option>
                        <option value="Support">Support</option>
                        <option value="billing">Billing</option>
                        <option value="General">General</option>
                    </select>
                    <textarea name="message" placeholder="Enter your message"></textarea>
                    <button type="submit" name="submit">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>