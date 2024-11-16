<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index Page</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    /* Banner Section - Make the image take 45vh and center the text */
    .banner-section {
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      background-color: #f8f9fa;
      padding: 0 20px;
    }

    .banner-image {
      height: 45vh; /* Image takes up 45% of the viewport height */
      width: 100%;
      object-fit: cover; /* Ensure the image covers the area without stretching */
    }

    .banner-text {
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      height: 45vh; /* Remaining space for text */
      padding: 20px;
    }

    .banner-text h1 {
      font-size: 3rem;
      color: #007bff;
    }

    .banner-text p {
      font-size: 1.2rem;
      color: #555;
      max-width: 600px;
      margin: 0 auto;
    }

    .cta-section {
      display: flex;
      align-items: center;
      padding: 20px;
      background-color: #e9ecef;
    }

    .cta-section img {
      max-width: 100%;
      border-radius: 10px;
    }

    .icon-card {
      text-align: center;
      padding: 20px;
    }

    .icon-card i {
      font-size: 3rem;
      color: #007bff;
      margin-bottom: 15px;
    }

  </style>
</head>
<body>
  <!-- Include Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Banner Section (Image and Text with Flexbox) -->
  <div class="banner-section">
    <img src="insta.png" class="banner-image" alt="Banner">
    <div class="banner-text">
      <div>
        <h2 class="text-primary">Welcome to Our Platform</h2>
        <p class="text-secondary">
          Empowering growth through innovative geotechnical solutions.
        </p>
        <a href="signup.php" class="btn btn-primary">Learn More</a>
      </div>
    </div>
  </div>

  <!-- Mission, Vision, Goals Section -->
  <div class="container my-5">
    <div class="row text-center">
      <!-- Mission -->
      <div class="col-md-4">
        <div class="icon-card">
          <i class="fas fa-bullseye"></i>
          <h4 class="mt-3">Mission</h4>
          <p>To inspire progress in the geotechnical field by delivering cutting-edge solutions that enhance the safety, 
            sustainability, and performance of infrastructure projects.</p>
        </div>
      </div>
      <!-- Vision -->
      <div class="col-md-4">
        <div class="icon-card">
          <i class="fas fa-eye"></i>
          <h4 class="mt-3">Vision</h4>
          <p>To be a leading provider of innovative geotechnical services that drive infrastructure development 
            and empower industries worldwide.</p>
        </div>
      </div>
      <!-- Goals -->
      <div class="col-md-4">
        <div class="icon-card">
          <i class="fas fa-tasks"></i>
          <h4 class="mt-3">Goals</h4>
          <p>Empower communities in the mining and construction industries with practical geotechnical knowledge and 
            solutions for sustainable growth.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action Section -->
  <div class="cta-section container my-5 p-4 rounded">
    <div class="row">
      <div class="col-lg-6">
        <h2 class="text-primary">Take Action Today!</h2>
        <p>
        Join us in shaping the future of infrastructure and innovation. Whether you're seeking expert geotechnical solutions, 
        advanced technologies, or sustainable development strategies, we're here to partner with you. 
        Let’s work together to build a stronger, more resilient future. Contact us today to explore how we can help you achieve your goals.
        </p>
        <a href="calculator.php" class="btn btn-success">Start Now</a>
      </div>
      <div class="col-lg-6">
       <br> <img src="calculator.jpeg" alt="Call to Action" class="img-fluid">
      </div>
    </div>
  </div>

  <!-- Include Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
