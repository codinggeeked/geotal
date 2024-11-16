<?php
session_start();
require 'vendor/autoload.php'; // Use Composer's autoload

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Dummy check for valid email (you should check the email in your DB)
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Generate reset token (for simplicity, using a random string)
        $reset_token = bin2hex(random_bytes(16));

        // Save the token to the database with an expiration time (this step is crucial)
        // You can store this token with the user's email and expiration time in the database

        // Send the password reset email
        $mail = new PHPMailer\PHPMailer\PHPMailer();
        $mail->isSMTP();
        $mail->Host = 'smtp.example.com';  // Your SMTP server
        $mail->SMTPAuth = true;
        $mail->Username = 'your-email@example.com'; // SMTP username
        $mail->Password = 'your-email-password'; // SMTP password
        $mail->SMTPSecure = PHPMailer\PHPMailer\PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Recipients
        $mail->setFrom('no-reply@example.com', 'Your Website');
        $mail->addAddress($email); // Recipient email

        // Content
        $mail->isHTML(true);
        $mail->Subject = 'Password Reset Request';
        $mail->Body = 'Click the link to reset your password: <a href="http://yourdomain.com/reset-password.php?token=' . $reset_token . '">Reset Password</a>';

        if ($mail->send()) {
            $_SESSION['message'] = 'Password reset link has been sent to your email.';
        } else {
            $_SESSION['message'] = 'Mailer Error: ' . $mail->ErrorInfo;
        }
    } else {
        $_SESSION['message'] = 'Invalid email address.';
    }

    header('Location: request-reset.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request Password Reset</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h2>Request Password Reset</h2>

    <?php if (isset($_SESSION['message'])): ?>
      <div class="alert alert-info"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label for="email" class="form-label">Enter Your Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
      </div>
      <button type="submit" class="btn btn-primary">Send Reset Link</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
