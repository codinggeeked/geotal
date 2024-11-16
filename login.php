<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Dummy validation
    if ($username === 'user' && $password === 'password') {
        $_SESSION['logged_in'] = true;
        header('Location: index.php');
        exit();
    } else {
        $error = 'Invalid username or password';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    .login-container {
      max-width: 400px; /* Matching the signup page width */
      margin: 0 auto;
      padding: 30px;
      background-color: #f8f9fa;
      border-radius: 8px;
    }
    .center-content {
      text-align: center;
    }
    .btn-custom {
      width: 100%;
      margin-top: 10px;
    }
    .text-center a {
      margin-top: 10px;
      display: block;
      text-decoration: none;
    }
  </style>
</head>
<body><br><br>
  <div class="login-container">
    <h2 class="text-center">Login</h2>
    <?php if (isset($error)): ?>
      <div class="alert alert-danger"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="POST">
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
      </div>
      <button type="submit" class="btn btn-primary btn-custom">Login</button>
    </form>

    <!-- Reset Password and Sign Up Links -->
    <div class="text-center">
      <a href="reset-password.php" class="text-decoration-none">Forgot your password?</a>
      <a href="signup.php" class="btn btn-success btn-custom">Sign Up</a>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
