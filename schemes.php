<?php
include('header.php');
include('db.php');

// Validate department id from URL
if (isset($_GET['department']) && is_numeric($_GET['department'])) {
    $dept_id = $_GET['department'];

    // Get department details
    $dept_query = mysqli_query($conn, "SELECT * FROM departments WHERE id = $dept_id");
    $dept = mysqli_fetch_assoc($dept_query);

    // Get schemes for this department
    $scheme_query = mysqli_query($conn, "SELECT * FROM schemes WHERE department_id = $dept_id");
} else {
    echo "<h2>Invalid Department</h2>";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $dept['dep_name']; ?> - Schemes</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="container">
    <section class="schemes">
        <h1><?php echo $dept['dep_name']; ?> - योजना</h1>
        <p class="section-intro"><?php echo $dept['detail']; ?></p>

        <?php
        if (mysqli_num_rows($scheme_query) > 0) {
            while ($row = mysqli_fetch_assoc($scheme_query)) {
                echo "
                <div class='scheme-card'>
                    <h2>{$row['scheme_name']}</h2>
                    <p><strong>विवरण:</strong> {$row['scheme_description']}</p>
                    <p><strong>पात्रता:</strong> {$row['eligibility']}</p>
                    <p><strong>लागणारी कागदपत्रे:</strong> {$row['required_documents']}</p>";
                
                if (!empty($row['document_link'])) {
                    echo "<p><a href='uploads/{$row['document_link']}' target='_blank'>डॉक्युमेंट डाउनलोड करा</a></p>";
                }

                echo "</div>";
            }
        } else {
            echo "<p>या विभागासाठी सध्या कोणतीही योजना उपलब्ध नाही.</p>";
        }
        ?>
    </section>
</div>

<?php include('footer.php'); ?>
</body>
</html>
