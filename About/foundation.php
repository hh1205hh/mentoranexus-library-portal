<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Foundation | Mentora Nexus - Our Beginnings and Core Values</title>
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
                    <li><a href="foundation.php" class="active">Foundation</a></li>
                    <li><a href="history.php">History</a></li>
                    <li><a href="future-plans.php">Future Plans</a></li>
                </ul>
            </nav>

            <h1>Foundation</h1>
            <p>
                Mentora Nexus was established in 2010 with a singular focus: to support academic excellence in computer
                science.
                Starting as a niche library catering to programming and software engineering enthusiasts, it has grown
                to become
                a trusted name among students, professionals, and educators for comprehensive academic resources.
            </p>

            <h2>Core Values</h2>
            <ul>
                <li><strong>Expertise:</strong> Providing high-quality, meticulously curated textbooks on computer
                    science topics.</li>
                <li><strong>Accessibility:</strong> Ensuring learners have access to critical academic materials
                    worldwide.</li>
                <li><strong>Support:</strong> Fostering a community of learners and professionals through
                    knowledge-sharing and events.</li>
            </ul>

            <p>
                From its inception, Mentora Nexus has been committed to being more than just a library—it is a hub of
                learning and growth for the computer science community.
            </p>
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