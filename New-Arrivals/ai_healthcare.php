<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
    <meta charset="UTF-8">
    <title> Mentora Nexus. Your Gateway to Endless Reads.</title>
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
            <aside>
                <h1>Related Articles</h1>
                <ul>
                    <li><a href="data_ai_maintenance.php">Unlocking Industrial AI with *Data Analytics and AI for
                            Predictive Maintenance*</a></li>
                    <li><a href="ai_healthcare.php" class="active">Transforming Healthcare with *Artificial
                            Intelligence in
                            Healthcare*</a></li>
                    <li><a href="brain_tech_cognition.php">Advancing Human-Computer Interaction with *Brain Technology
                            in Augmented Cognition*</a></li>
                    <li><a href="metaheuristics_iot.php">Optimizing Smart Sensors with *Metaheuristics for Smart
                            Sensors*</a></li>
                    <li><a href="cyber_threat_intelligence.php">Mastering Cyber Defense with *Spies in the Bits and
                            Bytes*</a></li>
                </ul>
            </aside>

            <div class="article">
                <h2>Artificial Intelligence in Healthcare By<i> Gourav Bathla </i>, <i> Sanoj Kumar </i>, <i> Harish
                        Garg </i>, and <i> Deepika Saini </i></h2>
                <figure>
                    <a target="_blank" href="../Images/New-Arrivals/AI_HEALTHCARE.jpg"><img
                            src="../Images/New-Arrivals/AI_HEALTHCARE.jpg"
                            alt="Image of the Artificial Intelligence in Healthcare book"></a>
                    <figcaption>Cover of <strong>Artificial Intelligence in Healthcare</strong></figcaption>
                </figure>
                <p><strong>Introduction:</strong> *Artificial Intelligence in Healthcare* is a cutting-edge 2024 release
                    that explores how artificial intelligence is transforming the healthcare industry. Written by Gourav
                    Bathla, Sanoj Kumar, Harish Garg, and Deepika Saini, this book delves into the applications of AI in
                    chronic disease management, particularly focusing on diabetes and hypertension. It provides an
                    in-depth look at how AI-driven solutions are improving patient outcomes and streamlining healthcare
                    operations.</p>

                <p><strong>Why This Book is So Special:</strong> The book stands out for its practical approach to AI in
                    healthcare. The authors combine theoretical concepts with real-world applications, offering a
                    comprehensive understanding of how AI is integrated into medical practices. It covers a wide range
                    of topics, from diagnostic tools powered by machine learning to AI’s role in personalized treatment
                    plans. Its accessibility makes it an invaluable resource for healthcare professionals,
                    technologists, and students interested in AI-driven innovations in medicine.</p>

                <p><strong>The Role of AI in Modern Healthcare:</strong> AI is revolutionizing the healthcare sector by
                    enhancing diagnostic accuracy, automating administrative tasks, and providing personalized care.
                    This book highlights AI’s impact on managing chronic diseases, especially through predictive
                    analytics, automated monitoring, and AI-based decision support systems. It discusses AI’s ability to
                    analyze vast amounts of medical data, enabling better treatment choices, disease prevention, and
                    improved patient care management.</p>

                <p><strong>Structure of the Book:</strong> *Artificial Intelligence in Healthcare* is structured to
                    guide readers from foundational AI concepts to their specific applications in healthcare. The book
                    starts by introducing AI techniques, including machine learning, deep learning, and natural language
                    processing, and then moves into their healthcare applications, such as medical imaging, remote
                    monitoring, and robotic surgeries. Each chapter includes case studies and examples that illustrate
                    how AI tools are being utilized in real-world healthcare settings.</p>

                <p><strong>Legacy:</strong> This book serves as a valuable resource for understanding the evolving role
                    of AI in healthcare. By covering both the technical aspects and practical implications of AI, it is
                    essential reading for those in healthcare, data science, and AI research fields. It paves the way
                    for more efficient and effective healthcare practices, driving innovation in the field and improving
                    patient outcomes through technology.</p>
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