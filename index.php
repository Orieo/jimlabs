<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juno Tech Laboratory</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/7517b1ef96.js" crossorigin="anonymous"></script>
</head>
<body>
    <?php include 'header.php'; ?>
    
    <main>
        <section class="hero">
            <div class="hero_container">
                <div class="hero_content">
                    <h1>Partnering with Juno Tech for Your Medical Diagnostic Needs</h1>
                    <p>Juno Tech Laboratory stands as a trusted, nationwide provider of top-tier lab testing services, offering an extensive range of tests designed to meet the needs of various medical specialties.</p>
                    <a href="aboutus.php" class="hero_btn">Find Out More</a>
                </div>
                <div class="hero_image">
                    <img id="hero-img" src="images/lab.jpg" alt="Illustration of a modern laboratory with medical equipment"/>
                </div>
            </div>
        </section>

        <?php include 'services.php'; ?>
        <?php include 'contact.php'; ?>
    </main>

    <?php include 'footer.php'; ?>
    <script src="app.js"></script>
</body>
</html>