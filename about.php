<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us | Panchayat Samiti Yojana Mahiti Pranali</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
      .about-section {
        padding: 40px 20px;
        max-width: 900px;
        margin: auto;
      }

      .about-section h1, .about-section h2 {
        color: #1e3d59;
        margin-bottom: 15px;
      }

      .about-section p {
        margin-bottom: 20px;
        line-height: 1.8;
        color: #444;
      }

      .about-images {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
        margin: 40px 0;
      }

      .about-images img {
        width: 100%;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0,0,0,0.1);
        transition: transform 0.3s ease;
      }

      .about-images img:hover {
        transform: scale(1.02);
      }
    </style>
</head>
<body>

<?php include('header.php'); ?>

<div class="container">
    <section class="about-section">
        <h1>About Us</h1>
        <p>
            This is the Official Portal of the Panchayat Samiti, developed to provide transparent and comprehensive information 
            about various government schemes aimed at rural development. This portal is hosted by the Panchayat Samiti Office 
            and is designed and developed to serve as a central source of information for the citizens.
        </p>

        <!-- Images Row 1 -->
        <div class="about-images">
        <img src="images/Maharashtra_Divisions_mr.jpg" alt="Village Interaction">

            <img src="images/Rural Development.jpg" alt="Rural Development">
        </div>

        <p>
            The portal has been developed as a mission-driven initiative to digitize and streamline access to scheme-related 
            services, benefits, and updates for villagers and stakeholders. It was officially launched in 2025.
        </p>

        <h2>Objective / Vision</h2>
        <p>
            The primary objective of this portal is to offer a single-window access point to all the important schemes, 
            departments, and services provided by the Panchayat Samiti. The platform aims to ensure that rural citizens can 
            conveniently access reliable, updated, and accurate information in a user-friendly format.
        </p>

        <!-- Images Row 2 -->
        <div class="about-images">
            <img src="images/Digital_india.svg" alt="Digital Access">
            <img src="images/Community Meeting.jpg" alt="Community Meeting">
        </div>

        <p>
            This portal also promotes transparency, accessibility, and empowerment by digitally connecting villagers to 
            development initiatives. The portal is built in accordance with guidelines for accessibility and digital inclusion.
        </p>

        <h2>Portal Management</h2>
        <p>
            The content and technical operations of this portal are managed by the Panchayat Samiti’s IT Cell. It is our continuous 
            effort to improve the content coverage, layout, user experience, and features to ensure a seamless and informative 
            experience for all users.
        </p>
    </section>
</div>

<?php include('footer.php'); ?>

</body>
</html>
