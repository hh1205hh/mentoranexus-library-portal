<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Visit Us | Mentora Nexus - Opening Times</title>
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
                    <li><a href="locations.php">Locations</a></li>
                    <li><a href="opening-times.php" class="active">Opening Times</a></li>
                </ul>
            </nav>

            <div class="opening-times">
                <p><strong>
                        <h2>Opening Times</h2>
                    </strong></p>
                <p>Welcome to Mentora Nexus! Check out our operating hours below:</p>
                <table>
                    <thead>
                        <tr>
                            <th>Day</th>
                            <th>Opening Time</th>
                            <th>Closing Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Sunday</td>
                            <td>9:00 AM</td>
                            <td>7:00 PM</td>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>9:00 AM</td>
                            <td>7:00 PM</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>9:00 AM</td>
                            <td>7:00 PM</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>9:00 AM</td>
                            <td>7:00 PM</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>9:00 AM</td>
                            <td>7:00 PM</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td>10:00 AM</td>
                            <td>4:00 PM</td>
                        </tr>
                        <tr>
                            <td>Staurday</td>
                            <td class="highlight" colspan="2">Closed</td>
                        </tr>
                    </tbody>
                </table>
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