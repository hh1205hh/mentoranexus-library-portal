<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>About Us | Mentora Nexus - Our Journey and Vision</title>
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


        <div id="about-us">
            <h1>About Us</h1>

            <div class="about-section">
                <h2>Foundation</h2>
                <p>
                    Mentora Nexus was founded in 2010 with a focus on providing a specialized selection of academic
                    computer science textbooks. Starting as a local library, we envisioned creating a one-stop
                    destination for students, professionals, and enthusiasts of computer science. Over the years, our
                    commitment to excellence has made us a trusted name in the field of academic resources.
                </p>
                <a href="foundation.php" class="read-more">Read More</a>
            </div>

            <div class="about-section">
                <h2>History</h2>
                <p>
                    Since our inception, Mentora Nexus has grown and evolved. In 2015, we launched our e-commerce
                    platform, allowing global access to our vast collection of academic textbooks. As we continue to
                    innovate, we have integrated cutting-edge technology to enhance our customers' experience, including
                    AI-driven recommendations and personalized learning resources.
                </p>
                <a href="history.php" class="read-more">Read More</a>
            </div>

            <div class="about-section">
                <h2>Future Plans</h2>
                <p>
                    Looking ahead, Mentora Nexus is focused on further revolutionizing the academic book industry. We
                    plan to introduce eco-friendly initiatives, such as sustainable packaging and carbon-neutral
                    delivery. Additionally, we are working on building global digital libraries, making rare and
                    specialized computer science textbooks accessible to a global audience, and leveraging AI for
                    improved learning experiences.
                </p>
                <a href="future-plans.php" class="read-more">Read More</a>
            </div>

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