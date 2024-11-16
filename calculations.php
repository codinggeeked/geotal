<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculations</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }
    .content {
      flex: 1;
    }
    .center-content {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 50vh;
    }
  </style>
</head>
<body>
  <!-- Include Navbar -->
  <?php include 'navbar.php'; ?>

  <!-- Main Content -->
  <div class="content">
    <div class="container">
      <div class="center-content">
        <div class="text-center">
          <h2 class="mb-4 text-primary">Choose a Calculation Type</h2>
          <select class="form-select w-50 mx-auto" id="calculationType">
            <option value="" selected>Select a calculation type</option>
            <option value="addition">Addition</option>
            <option value="subtraction">Subtraction</option>
            <option value="multiplication">Multiplication</option>
            <option value="division">Division</option>
          </select>
          <button 
            type="button" 
            class="btn btn-primary mt-3" 
            data-bs-toggle="modal" 
            data-bs-target="#calculationModal">
            Start Calculation
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="calculationModal" tabindex="-1" aria-labelledby="calculationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-primary" id="calculationModalLabel">Perform Calculation</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="calculationForm">
            <div class="mb-3">
              <label for="figure1" class="form-label">Figure 1</label>
              <input type="number" class="form-control" id="figure1" placeholder="Enter first figure" required>
            </div>
            <div class="mb-3">
              <label for="figure2" class="form-label">Figure 2</label>
              <input type="number" class="form-control" id="figure2" placeholder="Enter second figure" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Calculate</button>
          </form>
        </div>
        <div class="modal-footer">
          <small id="result" class="text-secondary"></small>
        </div>
      </div>
    </div>
  </div>

  <!-- Include Footer -->
  <?php include 'footer.php'; ?>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    document.getElementById('calculationForm').addEventListener('submit', function(e) {
      e.preventDefault();

      // Fetch input values
      const figure1 = parseFloat(document.getElementById('figure1').value);
      const figure2 = parseFloat(document.getElementById('figure2').value);
      const calcType = document.getElementById('calculationType').value;
      const resultElement = document.getElementById('result');
      
      let result;

      // Perform calculation based on type
      if (calcType === 'addition') {
        result = figure1 + figure2;
      } else if (calcType === 'subtraction') {
        result = figure1 - figure2;
      } else if (calcType === 'multiplication') {
        result = figure1 * figure2;
      } else if (calcType === 'division') {
        result = figure2 !== 0 ? figure1 / figure2 : 'Error: Division by zero';
      } else {
        result = 'Please select a calculation type.';
      }

      // Display the result
      resultElement.textContent = `Result: ${result}`;
    });
  </script>
</body>
</html>
