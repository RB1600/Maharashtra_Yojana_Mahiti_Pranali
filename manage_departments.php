<?php
// DB connection
$conn = new mysqli("localhost", "root", "", "yojana_pranali");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch departments
$sql = "SELECT * FROM departments ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Departments & Schemes</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      background: #f5f7fa;
    }

    .dashboard {
      max-width: 1000px;
      margin: 40px auto;
      background: white;
      padding: 40px;
      border-radius: 20px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
    }

    h1 {
      font-size: 36px;
      margin-bottom: 10px;
    }

    h2 {
      font-size: 30px;
      margin-top: 0;
      margin-bottom: 20px;
    }

    .status {
      color: green;
      font-weight: bold;
    }

    .grid {
      display: flex;
      flex-wrap: wrap;
      margin-top: 30px;
    }

    .section {
      flex: 1;
      min-width: 300px;
      padding: 20px;
    }

    .section h3 {
      margin-bottom: 15px;
    }

    .card {
      background: #eee;
      border-radius: 10px;
      padding: 20px;
      margin-top: 15px;
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
    }

    .card p {
      margin: 5px 0;
    }

    .card-title {
      font-size: 22px;
      font-weight: bold;
      color: #333;
    }

    .card-text {
      color: #666;
    }

    .btn-outline-primary {
      background: transparent;
      border: 1px solid #007bff;
      color: #007bff;
      padding: 8px 15px;
      text-decoration: none;
      border-radius: 5px;
    }

    .btn-outline-primary:hover {
      background: #007bff;
      color: white;
    }

    .departments-section {
      background: #f4f7ff;
      padding-top: 40px;
      padding-bottom: 40px;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
    }

    .text-center {
      text-align: center;
    }

    .text-muted {
      color: #888;
    }
  </style>
</head>
<body>

<section class="departments-section py-5" style="background: #f4f7ff;">
    <div class="container">
        <h2 class="text-center mb-3 fw-bold text-primary">Departments & Schemes</h2>
        <p class="text-center mb-5 text-muted">Explore government departments and the welfare schemes they offer for rural development.</p>
        
        <div class="row">
            <?php while($row = $result->fetch_assoc()): ?>
            <div class="col-md-6 col-lg-4 mb-4">
                <div class="card h-100 shadow border-0">
                    <div class="card-body">
                        <h5 class="card-title text-dark"><?= htmlspecialchars($row['name']) ?></h5>
                        <p class="card-text text-muted"><?= htmlspecialchars($row['description']) ?></p>
                    </div>
                    <div class="card-footer bg-transparent border-0 text-end">
                        <a href="schemes.php?dept_id=<?= $row['id'] ?>" class="btn btn-outline-primary btn-sm">View Schemes</a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>
    </div>
</section>

</body>
</html>
