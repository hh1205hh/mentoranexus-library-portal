<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>New Computer Science Textbook Arrivals | Mentora Nexus</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet" />
    <link href="../css/footer.css" type="text/css" rel="stylesheet" />
    <link href="../css/nav-menu.css" type="text/css" rel="stylesheet" />
    <link href="../css/new-arrivals.css" type="text/css" rel="stylesheet" />
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
                    <li><a href="../New-Arrivals/index.php" class="active">New Arrivals</a></li>
                </ul>
            </nav>

        </header>

        <div id="content">
            <div class="container">
                <p><strong>
                        <h2>New Computer Science Textbooks Arrivals</h2>
                    </strong></p>
                <ul>
                    <li><a href="data_ai_maintenance.php">Data Analytics and Artificial Intelligence for Predictive
                            Maintenance in Smart Manufacturing</a>
                        - By Amit Kumar Tyagi, Shrikant Tiwari, and Gulshan Soni. This book explores AI and data
                        analytics applications for predictive maintenance in smart manufacturing, offering practical
                        insights and industrial case studies.</li>

                    <li><a href="ai_healthcare.php">Artificial Intelligence in Healthcare</a>
                        - By Gourav Bathla, Sanoj Kumar, Harish Garg, and Deepika Saini. Focused on AI's role in
                        managing chronic conditions like diabetes and hypertension, this book highlights its
                        transformative potential in healthcare systems.</li>

                    <li><a href="brain_tech_cognition.php">Brain Technology in Augmented Cognition: Current and Future
                            Trends</a>
                        - By Suraj Sood. This resource delves into cutting-edge trends in augmented cognition and
                        brain-computer interfaces, offering perspectives on enhancing human-computer interaction.</li>

                    <li><a href="metaheuristics_iot.php">Metaheuristics and Reinforcement Techniques for Smart Sensor
                            Applications</a>
                        - By Adwitiya Sinha, Manju, and Samayveer Singh. Focused on optimization methods and
                        reinforcement learning, this book is tailored for IoT and smart sensor applications.</li>

                    <li><a href="cyber_threat_intelligence.php">Spies in the Bits and Bytes: The Art of Cyber Threat
                            Intelligence</a>
                        - By Atif Ali and Baber Majid Bhatti. This book provides comprehensive coverage of cyber threat
                        intelligence strategies, emphasizing the methods used to identify, analyze, and counter digital
                        threats.</li>
                </ul>
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