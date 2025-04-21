<?php
include '../db.php';

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM schemes WHERE id=$id");
    header("Location: manage_schemes.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Manage Schemes</title>
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
    }

    .card p {
      margin: 5px 0;
    }

    table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
    }

    table th, table td {
      padding: 12px;
      text-align: left;
      border-bottom: 1px solid #ccc;
    }

    .card-purple {
      background: linear-gradient(135deg, #7f00ff, #e100ff);
      color: white;
      border-radius: 12px;
      padding: 20px;
      margin-top: 15px;
    }

    .actions a {
      text-decoration: none;
      color: #007bff;
      margin-right: 10px;
    }

    .actions a:hover {
      color: #0056b3;
    }
  </style>
</head>
<body>

<div class="dashboard">
  <h1>Manage Schemes</h1>

  <h2>All Schemes</h2>
  <table>
    <tr>
        <th>ID</th><th>Name</th><th>Description</th><th>Department</th><th>Actions</th>
    </tr>
    <?php
    $result = mysqli_query($conn, "SELECT s.*, d.name AS dept_name FROM schemes s JOIN departments d ON s.department_id = d.id");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['description']}</td>
                <td>{$row['dept_name']}</td>
                <td class='actions'>
                    <a href='edit_scheme.php?id={$row['id']}'>Edit</a> |
                    <a href='?delete={$row['id']}'>Delete</a>
                </td>
              </tr>";
    }
    ?>
  </table>
</div>

</body>
</html>
