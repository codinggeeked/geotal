<nav class="navbar navbar-expand-lg navbar-light bg-white border-bottom">
  <div class="container">
    <a class="navbar-brand text-primary fw-bold" href="index.php">Geotal</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-dark fs-5" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-dark fs-5" href="about.php">About</a>
        </li>
        <li class="nav-item">
          <?php if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true): ?>
            <a class="nav-link text-dark fs-5" href="calculations.php">Calculations</a>
          <?php else: ?>
            <a class="nav-link text-dark fs-5" href="login.php">Calculations</a>
          <?php endif; ?>
        </li>
      </ul>
      <a href="signup.php" class="btn btn-primary ms-3">Sign Up</a>
    </div>
  </div>
</nav>

<!-- Custom CSS for spacing and font size -->
<style>
  @media (min-width: 992px) {
    .navbar-nav .nav-item {
      margin-left: 20px; /* Adds more space between links */
    }
  }

  .navbar-nav .nav-link {
    font-size: 1.25rem; /* Increases font size of navbar links */
  }
</style>
