<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
  <style>
    .section {
      padding: 50px 20px;
      background-color: #f8f9fa;
    }
    .section:nth-child(even) {
      background-color: #e9ecef;
    }
    .icon-box {
      text-align: center;
      padding: 20px;
    }
    .icon-box i {
      font-size: 3rem;
      color: #007bff;
      margin-bottom: 15px;
    }
    .text-primary {
      color: #007bff !important;
    }
  </style>
</head>
<body>
  <!-- Include Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Who We Are Section -->
  <div class="section">
    <div class="container">
      <div class="row align-items-center">
        <!-- Text Section -->
        <div class="col-md-4">
          <h2 class="text-primary">Our Solution</h2>
          <p>
            GeoTeCal is a comprehensive digital platform for automated geotechnical soil and rock classification, integrating advanced technologies and automation, such as:
          </p>
          <p>Machine Learning and AI</p>
          <p>Automated Reporting</p>
          <p>Centralized Dataset</p>
        </div>

        <!-- Image Section 1 -->
        <div class="col-md-4 text-center">
          <img src="banner.jpeg" class="img-fluid rounded mb-3" alt="Error-Free and Accurate">
          <h4 class="text-primary">Error-Free and Accurate</h4>
          <p>
            Ensuring precise results with minimal errors, leveraging cutting-edge technology.
          </p>
        </div>

        <!-- Image Section 2 -->
        <div class="col-md-4 text-center">
          <img src="banner.jpeg" class="img-fluid rounded mb-3" alt="Time and Cost Saving">
          <h4 class="text-primary">Time and Cost Saving</h4>
          <p>
            Streamlining processes to save valuable resources while maximizing efficiency.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Story Section -->
  <div class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="call.jpg" class="img-fluid rounded" alt="Our Story">
        </div>
        <div class="col-md-6">
          <h3 class="text-primary">Our Journey</h3>
          <p>
          Founded with the vision of transforming the mining and construction industries, we began as a 
          dedicated team focused on providing innovative geotechnical solutions. Over the years, we have evolved into a leading consultancy, 
          offering cutting-edge 
          technologies and sustainable infrastructure solutions to help our clients tackle real-world challenges and drive industry progress.
          </p>
        </div>
      </div>
    </div>
  </div>

  <!-- Core Values Section -->
  <div class="section text-center">
    <div class="container">
      <h3 class="text-primary">Our Core Values</h3>
      <div class="row">
        <!-- Innovation -->
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-lightbulb"></i>
            <h4>Innovation</h4>
            <p>We are committed to advancing the mining and construction industries with cutting-edge technologies and 
              groundbreaking geotechnical solutions that drive progress and enhance sustainable infrastructure.</p>
          </div>
        </div>
        <!-- Integrity -->
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-handshake"></i>
            <h4>Integrity</h4>
            <p>We uphold honesty and transparency in all our interactions and decisions.We uphold honesty and transparency 
              in every geotechnical investigation and consultation,
               ensuring our clients receive reliable, accurate, and trustworthy solutions.
            </p>
          </div>
        </div>
        <!-- Community -->
        <div class="col-md-4">
          <div class="icon-box">
            <i class="fas fa-users"></i>
            <h4>Community</h4>
            <p>We believe in fostering a collaborative environment, where our clients, partners, 
              and team members work together to achieve shared growth and create lasting impact on infrastructure development.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Our Uniqueness Section -->
  <div class="section">
    <div class="container">
      <h3 class="text-primary text-center">Our Uniqueness</h3>
      <br>
      <div class="row align-items-center">
        <!-- Image Section -->
        <div class="col-md-5">
          <img src="ocean.jpg" class="img-fluid rounded" alt="Our Uniqueness">
        </div> <br>
        <!-- Text Section -->
        <div class="col-md-7"><br>
          <div class="row">
            <!-- Timeline Classification -->
            <div class="col-md-6 d-flex align-items-start mb-4">
              <i class="fas fa-clock text-primary me-3 fa-2x"></i>
              <div>
                <h5>Timeline Classification</h5>
                <p>PreLabTest, DuringLabTest, and PostLabTest stages fully streamlined.</p>
              </div>
            </div>
            <!-- User-Friendly Interface -->
            <div class="col-md-6 d-flex align-items-start mb-4">
              <i class="fas fa-laptop text-primary me-3 fa-2x"></i>
              <div>
                <h5>User-Friendly Interface</h5>
                <p>Features optimized for simplicity and convenience.</p>
              </div>
            </div>
            <!-- Fast Classification -->
            <div class="col-md-6 d-flex align-items-start mb-4">
              <i class="fas fa-tachometer-alt text-primary me-3 fa-2x"></i>
              <div>
                <h5>Fast Classification</h5>
                <p>Processes input parameters quickly and efficiently.</p>
              </div>
            </div>
            <!-- Accessibility & Flexibility -->
            <div class="col-md-6 d-flex align-items-start mb-4">
              <i class="fas fa-mobile-alt text-primary me-3 fa-2x"></i>
              <div>
                <h5>Accessible & Flexible</h5>
                <p>Works seamlessly across all devices with a web interface.</p>
              </div>
            </div>
            <!-- Storage -->
            <div class="col-md-6 d-flex align-items-start mb-4">
              <i class="fas fa-database text-primary me-3 fa-2x"></i>
              <div>
                <h5>Storage</h5>
                <p>Retrieve entered data and produce detailed reports.</p>
              </div>
            </div>
            <!-- Convenience -->
            <div class="col-md-6 d-flex align-items-start mb-4">
              <i class="fas fa-hand-holding-heart text-primary me-3 fa-2x"></i>
              <div>
                <h5>Convenient</h5>
                <p>Access documents with just a click, no more paperwork.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Call to Action Section -->
  <div class="section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <h3 class="text-primary">Join Us Today</h3>
          <p>
          Be a part of our journey as we continue to shape the future of geotechnical solutions and infrastructure. 
          Whether you're looking to innovate, 
          collaborate, or contribute to sustainable construction and mining practices, we have a place for you.          
        </p>
          <a href="signup.php" class="btn btn-success">Get Started</a> 
        </div>
        <div class="col-md-6"><br>
          <img src="call.jpg" class="img-fluid rounded" alt="Join Us">
        </div>
      </div>
    </div>
  </div>

  <!-- Include Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
