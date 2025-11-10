<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Visit Us | Mentora Nexus - Locations</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet" />
    <link href="../css/footer.css" type="text/css" rel="stylesheet" />
    <link href="../css/nav-menu.css" type="text/css" rel="stylesheet" />
    <link href="../css/visit.css" type="text/css" rel="stylesheet" />
</head>

<body>
    <div class="warpper">
        <header>
            <div class="header-container">

                <div class="logo">
                    <a href="../index.php">
                        <img src="../Images/Logo/partial-logo.png" alt="library Logo" />
                    </a>
                </div>

                <div class="search-box">
                    <input type="text" placeholder="Search for books..." />
                    <button type="button">Search</button>
                </div>

                <div class="user-actions">
                    <?php if ($loggedIn): ?>
                        <form action="../Users/logout.php" method="POST" style="display: inline;">
                            <button type="submit">Log Out</button>
                        </form>
                    <?php else: ?>
                        <a href="../Users/signin.html">Sign In</a> | <a href="../Users/signup.html">Sign Up</a>
                    <?php endif; ?>
                </div>
            </div>

            <nav>
                <ul>
                    <li><a href="../index.php">Home</a></li>
                    <li><a href="../Visit/index.php" class="active">Visit</a></li>
                    <li><a href="../Bestsellers/index.php">Bestsellers</a></li>
                    <li><a href="../New-Arrivals/index.php">New Arrivals</a></li>
                </ul>
            </nav>

        </header>


        <div id="content">
            <nav>
                <ul class="sec-nav">
                    <li><a href="locations.php" class="active">Locations</a></li>
                    <li><a href="opening-times.php">Opening Times</a></li>
                </ul>
            </nav>
            <div class="map-container">
                <div class="map-info">
                    <p><strong>
                            <h3>Our Locations</h3>
                        </strong></p>
                    <p>Visit us at our flagship store or one of our convenient branch locations:</p>
                    <p><strong>Main Store:</strong> 123 Book Street, Literature City, BK 56789</p>
                    <p><strong>Branch:</strong> 456 Novel Avenue, Fiction Town, BK 34567</p>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799142208!2d-74.25986668928032!3d40.697670063328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5a9bc8c81%3A0xc80b8f06e177fe62!2s123%20Book%20Street%2C%20Literature%20City%2C%20BK%2056789!5e0!3m2!1sen!2sus!4v1690198770123!5m2!1sen!2sus"
                    allowfullscreen="true" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                </iframe>
            </div>
        </div>

        <footer>
            <div class="footer-container">
                <div class="footer-about">
                    <a href="../About/index.php">
                        <h3> About Us</h3>
                    </a>
                    <p>Mentora Nexus is your gateway to endless reads. Explore a wide range of books, discover new
                        authors, and enjoy seamless shopping.</p>
                </div>

                <div class="footer-contact">
                    <a id="Contact" , href="../Contact/index.php"> Contact Us</a>
                    <ul>
                        <li>Email: <a href="mailto:haimlevhar84@gmail.com">haimlevhar84@gmail.com</a></li>
                        <li>Phone: +972-52-204-1901</li>
                        <li>Address: 123 Book Street, Literature City, BK 56789</li>
                    </ul>
                </div>

                <div class="footer-rating">
                    <h3>Rate Us</h3>
                    <div class="stars">
                        <span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span><span>⭐</span>
                    </div>
                    <p>Your feedback helps us improve!</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2024 Mentora Nexus. All rights reserved.</p>
            </div>
        </footer>
    </div>
</body>

</html>