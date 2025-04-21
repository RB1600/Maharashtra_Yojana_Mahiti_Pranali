<?php  
include('header.php'); 
include('db.php'); // make sure this file connects to your DB
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Explore all Panchayat Samiti departments and their government schemes.">
    <meta name="keywords" content="Departments, Panchayat Samiti, Government Schemes">
    <title>Departments - Panchayat Samiti</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <section class="departments">
        <h1>Departments & Schemes</h1>
        <p class="section-intro">Explore all departments and view the schemes they offer for rural development.</p>

        <div class="department-grid">
            <?php
            $query = "SELECT * FROM departments ORDER BY id ASC";
            $result = mysqli_query($conn, $query);

            while ($row = mysqli_fetch_assoc($result)) {
                echo "
                <div class='department-card'>
                    <img src='{$row['photo']}' alt='{$row['dep_name']}' style='width:100%; height:180px; object-fit:cover; border-radius:10px;'>
                    <h2>{$row['dep_name']}</h2>
                    <p>{$row['detail']}</p>
                    <a class='btn-secondary' href='schemes.php?department={$row['id']}'>View Schemes</a>
                </div>";
            }
            ?>
        </div>
    </section>
</div>

<?php include('footer.php'); ?>
</body>
</html>
