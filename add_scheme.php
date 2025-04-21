<?php
include '../db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Add Scheme</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', sans-serif;
      background: linear-gradient(135deg, #cfe2ff, #eaf1ff);
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .container {
      display: flex;
      background: white;
      border-radius: 20px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      width: 700px;
      max-width: 95%;
    }

    .side-panel {
      background: #2e7cf6;
      color: white;
      padding: 40px 20px;
      width: 120px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
    }

    .step {
      font-size: 24px;
      font-weight: bold;
      background: white;
      color: #2e7cf6;
      border-radius: 50%;
      width: 40px;
      height: 40px;
      display: flex;
      align-items: center;
      justify-content: center;
      margin-bottom: 20px;
    }

    .form-area {
      flex: 1;
      padding: 40px;
    }

    h2 {
      margin-top: 0;
      font-size: 24px;
      color: #333;
    }

    input[type="text"],
    textarea,
    select {
      width: 100%;
      padding: 12px;
      margin-top: 15px;
      margin-bottom: 25px;
      border: 1px solid #ccc;
      border-radius: 10px;
      font-size: 16px;
      background-color: #f9f9f9;
    }

    button {
      width: 100%;
      padding: 12px;
      font-size: 16px;
      background-color: #2e7cf6;
      color: white;
      border: none;
      border-radius: 10px;
      cursor: pointer;
    }

    button:hover {
      background-color: #1d5edb;
    }

    .success {
      margin-top: 15px;
      color: green;
      font-weight: 600;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="side-panel">
      <div class="step">1</div>
      <div class="step" style="opacity: 0.4;">2</div>
    </div>

    <div class="form-area">
      <h2>Add Scheme</h2>
      <form method="POST">
        <input type="text" name="name" placeholder="Scheme Name" required>
        <textarea name="description" placeholder="Scheme Description" required></textarea>
        <select name="department_id" required>
          <option value="">-- Select Department --</option>
          <?php
          $result = mysqli_query($conn, "SELECT * FROM departments");
          while ($dept = mysqli_fetch_assoc($result)) {
              echo "<option value='{$dept['id']}'>{$dept['name']}</option>";
          }
          ?>
        </select>
        <button type="submit" name="submit">Add Scheme</button>
      </form>

      <?php
      if (isset($_POST['submit'])) {
          $name = $_POST['name'];
          $desc = $_POST['description'];
          $dept_id = $_POST['department_id'];

          mysqli_query($conn, "INSERT INTO schemes (name, description, department_id) VALUES ('$name', '$desc', '$dept_id')");
          echo "<div class='success'>Scheme Added Successfully!</div>";
      }
      ?>
    </div>
  </div>

</body>
</html>
