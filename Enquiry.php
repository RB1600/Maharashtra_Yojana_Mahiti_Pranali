<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email settings
    $to = "your-email@example.com";
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nMessage: $message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<div style='text-align:center; padding: 10px; background: #d4edda; color: #155724;'>Thank you for contacting us!</div>";
    } else {
        echo "<div style='text-align:center; padding: 10px; background: #f8d7da; color: #721c24;'>Sorry, there was an error sending your message.</div>";
    }
}
include('header.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact Us - Yojana Mahiti Pranali</title>
  <link rel="stylesheet" href="css/style.css">
  <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
    }

    .contact-section {
        max-width: 600px;
        margin: 50px auto;
        padding: 25px;
        background-color: #fff;
        border-radius: 10px;
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.08);
    }

    .contact-section h2 {
        text-align: center;
        color: #1e3d59;
        margin-bottom: 10px;
    }

    .contact-section p.intro {
        text-align: center;
        color: #555;
        margin-bottom: 30px;
        font-size: 16px;
    }

    .contact-form input,
    .contact-form textarea {
        width: 100%;
        padding: 12px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-sizing: border-box;
    }

    .contact-form button {
        width: 100%;
        padding: 12px;
        background-color: #007bff;
        color: #fff;
        border: none;
        font-size: 16px;
        border-radius: 6px;
        cursor: pointer;
    }

    .contact-form button:hover {
        background-color: #0056b3;
    }

    .info-note {
        margin-top: 25px;
        font-size: 14px;
        color: #666;
        text-align: center;
    }

    .info-note strong {
        color: #333;
    }
  </style>
</head>
<body>

<div class="contact-section">
    <h2>Contact Yojana Mahiti Pranali</h2>
    <p class="intro">
        If you have any doubts, questions, or need help regarding government schemes in Maharashtra,
        use the form below. We’ll guide you through the application process or help you understand the scheme better.
    </p>

    <form class="contact-form" action="contact.php" method="POST">
        <input type="text" name="name" placeholder="तुमचं नाव / Your Name" required>
        <input type="email" name="email" placeholder="ई-मेल / Email Address" required>
        <textarea name="message" rows="5" placeholder="आपला प्रश्न / Your Message" required></textarea>
        <button type="submit">Send Message</button>
    </form>

    <div class="info-note">
        🔒 <strong>Note:</strong> Your data is secure with us. We usually respond within 2-3 business days.
    </div>
</div>

<?php include('footer.php'); ?>

</body>
</html>
