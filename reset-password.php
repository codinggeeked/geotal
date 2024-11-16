<?php
session_start();

// Include database connection (assuming you have one)
require 'db_connection.php'; // Replace with your actual DB connection file

// Validate token and handle the reset process
if (isset($_GET['token'])) {
    $token = $_GET['token'];

    // Validate token from the database
    $stmt = $pdo->prepare("SELECT * FROM password_resets WHERE token = :token AND expires_at > NOW()");
    $stmt->execute(['token' => $token]);
    $reset_request = $stmt->fetch();

    if ($reset_request) {
        // Check if the form is submitted
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $new_password = $_POST['new_password'];
            $confirm_password = $_POST['confirm_password'];

            // Password strength validation
            if (!preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d@$!%*?&]{8,}$/", $new_password)) {
                $error = 'Password must be at least 8 characters long and contain at least one letter and one number.';
            } elseif ($new_password === $confirm_password) {
                // Hash the password
                $hashed_password = password_hash($new_password, PASSWORD_BCRYPT);

                // Update the user's password in the database
                $update_stmt = $pdo->prepare("UPDATE users SET password = :password WHERE id = :user_id");
                $update_stmt->execute(['password' => $hashed_password, 'user_id' => $reset_request['user_id']]);

                // Delete the token from the password_resets table
                $delete_stmt = $pdo->prepare("DELETE FROM password_resets WHERE token = :token");
                $delete_stmt->execute(['token' => $token]);

                // Success message and redirect
                $_SESSION['message'] = 'Your password has been reset successfully!';
                header('Location: login.php');
                exit();
            } else {
                $error = 'Passwords do not match.';
            }
        }
    } else {
        $_SESSION['message'] = 'Invalid or expired token.';
        header('Location: login.php');
        exit();
    }
} else {
    $_SESSION['message'] = 'No token provided.';
    header('Location: login.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reset Your Password</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
  <div class="container my-5">
    <h2>Reset Your Password</h2>

    <?php if (isset($_SESSION['message'])): ?>
      <div class="alert alert-info"><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></div>
    <?php endif; ?>

    <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>

    <form method="POST">
      <div class="mb-3">
        <label for="new_password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="new_password" name="new_password" required>
        <small class="form-text text-muted">Password must be at least 8 characters long and contain at least one letter and one number.</small>
      </div>
      <div class="mb-3">
        <label for="confirm_password" class="form-label">Confirm New Password</label>
        <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
      </div>
      <button type="submit" class="btn btn-primary">Reset Password</button>
    </form>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
