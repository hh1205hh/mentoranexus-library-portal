<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Future Plans | Mentora Nexus - Innovating for Tomorrow</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet" />
    <link href="../css/footer.css" type="text/css" rel="stylesheet" />
    <link href="../css/nav-menu.css" type="text/css" rel="stylesheet" />
    <link href="../css/about.css" type="text/css" rel="stylesheet" />
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
                    <li><a href="../Visit/index.php">Visit</a></li>
                    <li><a href="../Bestsellers/index.php">Bestsellers</a></li>
                    <li><a href="../New-Arrivals/index.php">New Arrivals</a></li>
                </ul>
            </nav>

        </header>


        <div id="content">

            <nav>
                <ul>
                    <li><a href="foundation.php">Foundation</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="future-plans.phpw" class="active">Future Plans</a></li>
                </ul>
            </nav>

            <h1>Future Plans</h1>
            <p>
                Mentora Nexus is dedicated to empowering the next generation of computer science professionals through
                cutting-edge initiatives and innovative services.
                Our future plans focus on enhancing accessibility, knowledge-sharing, and sustainability.
            </p>

            <h2>Upcoming Projects</h2>
            <ul>
                <li><strong>Online Knowledge Hubs:</strong> Launching interactive platforms featuring expert-led
                    tutorials, textbook solutions, and study guides for computer science topics.</li>
                <li><strong>AI-Driven Learning Paths:</strong> Developing personalized learning recommendations to guide
                    students and professionals through curated reading lists and resources.</li>
                <li><strong>Sustainable Learning Resources:</strong> Expanding our digital textbook library to reduce
                    environmental impact while offering convenient access.</li>
                <li><strong>Collaborative Academic Communities:</strong> Establishing forums and events for learners and
                    experts to collaborate, discuss, and innovate in the computer science field.</li>
            </ul>
        </div>

        <footer>
            <div class="footer-container">
                <div class="footer-about">
                    <a href="index.php">
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