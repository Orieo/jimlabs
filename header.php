<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($title) ? $title : "Juno Tech Laboratory"; ?></title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://kit.fontawesome.com/7517b1ef96.js" crossorigin="anonymous"></script>
</head>
<body>
    <header>
        <nav class="navbar" role="navigation" aria-label="Main Nav">
            <div class="navbar_container">
                <a href="index.php" id="navbar_logo">Juno Tech Laboratory</a>
                <ul class="navbar_menu">
                    <li class="navbar_item">
                        <a href="index.php" class="navbar_links">HOME</a>
                    </li>
                    <li class="navbar_item">
                        <a href="aboutus.php" class="navbar_links">ABOUT</a>
                    </li>
                    <li class="navbar_item">
                        <a href="tests.php" class="navbar_links">TESTS</a>
                    </li>
                    <li class="navbar_item">
                        <a href="faq.php" class="navbar_links">FAQ</a>
                    </li>
                    <li class="navbar_item">
                        <a href="index.php#contact-us" class="navbar_links">CONTACT US</a>
                    </li>
                    <li class="navbar_btn mobile">
                        <a href="book.php" class="button">BOOK NOW</a>
                    </li>
                </ul>

                <div class="navbar_btn desktop">
                    <a href="book.php" class="button">BOOK NOW</a>
                </div>

                <button class="navbar_toggle" id="mobile-menu" aria-label="Toggle Navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
        </nav>
    </header>
