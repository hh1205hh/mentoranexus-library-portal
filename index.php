<?php
    session_start();
    $loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Mentora Nexus. Your Gateway to Endless Reads</title>
        <link href="../css/header.css" type="text/css" rel="stylesheet" />
        <link href="../css/footer.css" type="text/css" rel="stylesheet" />
        <link href="../css/nav-menu.css" type="text/css" rel="stylesheet" />
        <link href="../css/main.css" type="text/css" rel="stylesheet" />
    </head>

    <body>
        <div class="warpper">

            <header>
                <div class="header-container">
                    <div class="logo">
                        <a href="index.php">
                            <img src="Images/Logo/partial-logo.png" alt="library Logo" />
                        </a>
                    </div>
 
                    <div class="search-box">
                        <input type="text" placeholder="Search for books..." />
                        <button type="button">Search</button>
                    </div>
 
                    <div class="user-actions">
                        <?php if ($loggedIn): ?>
                            <form action="Users/logout.php" method="POST" style="display: inline;">
                                <button type="submit">Log Out</button>
                            </form>
                        <?php else: ?>
                            <a href="Users/signin.html">Sign In</a> | <a href="Users/signup.html">Sign Up</a>
                        <?php endif; ?>
                    </div>
                </div>

                <nav>
                    <ul>
                        <li><a href="index.php" class="active">Home</a></li>
                        <li><a href="Visit/index.php">Visit</a></li>
                        <li><a href="Bestsellers/index.php">Bestsellers</a></li>
                        <li><a href="New-Arrivals/index.php">New Arrivals</a></li>
                    </ul>
                </nav>
            </header>

            <div id="content">
                <h1>Welcome to Mentora Nexus</h1>
                <p>Your gateway to exploring a wide range of articles, books, and library resources — without the hassle of purchasing.</p>
                        
                <div id="video">
                    <video controls autoplay muted loop width="95%" height="60%">
                        <source src="videoplayback (1).webm" type="video/webm">
                        Your browser does not support the video tag.
                    </video>
                <div class="purpose-box">
                    <div class="purpose-content">
                        <h2>Discover the Uniqueness of Our Library Resource Portal</h2>
                        <p>Mentora Nexus is not just a portal; it’s your key to unlocking academic excellence, offering access to library
                            resources, articles, and a detailed map of our physical library location, all in one place.</p>
                        <a href="About/index.php" class="btn-cta">Learn More About Us</a>
                    </div>
 
                    <!-- <div class="purpose-images">
                        <div class="purpose-image">
                            <a href="/Bestsellers/index.php"><img src="/Images/Background/Img-Best.png" alt="Library Articles" /></a>
                            <p>Explore Scholarly Articles!</p>
                        </div> -->

                    <div class="resource-card">
                        <img src="/Images/Background/Img-Best.png" alt="Image has not found" />
                        <h3><a href="../Bestsellers/index.php">Explore Scholarly Articles!</a></h3>
                    </div>

                        <!-- <div class="purpose-image">
                            <a href="/New-Arrivals/index.php"><img src="/Images/Background/Img_New.png" alt="CS Books" /></a>
                            <p>Explore Recent Books!</p>
                        </div> -->

                    <div class="resource-card">
                        <img src="/Images/Background/Img_New.png" alt="Image has not found" />
                        <h3><a href="/New-Arrivals/index.php">Explore Scholarly Articles!</a></h3>
                    </div>
                    </div>
                </div>

                <div class="content-section">
                    <div class="resource-card">
                        <img src="/Images/Bestsellers/PRO_LANGU_PRAG.jpg" alt="Programming Language Pragmatics" />
                        <h3><a href="/Bestsellers/pro_langu_prag.php">Programming Language Pragmatics</a></h3>
                        <p>Dive into the comprehensive guide on programming languages, their concepts, and implementations.</p>
                    </div>

                    <div class="resource-card">
                        <img src="Images/New-Arrivals/AI_HEALTHCARE.jpg" alt="AI in Healthcare" />
                        <h3><a href="/New-Arrivals/ai_healthcare.php">AI in Healthcare</a></h3>
                        <p>Discover the transformative role of AI in revolutionizing the healthcare industry.</p>
                    </div>

                    <div class="resource-card">
                        <img src="/Images/Bestsellers/OPER_SYS_CENCEP.jpg" alt="Operating System Concepts" />
                        <h3><a href="/Bestsellers/oper_sys_concep.php">Operating System Concepts</a></h3>
                        <p>Explore the fundamental principles of operating systems, covering their design, implementation, and management.</p>
                    </div>

                    <div class="resource-card">
                        <img src="Images/Bestsellers/COM_NET.jpg" alt="Computer Networking" />
                        <h3><a href="/Bestsellers/com_net.php">Computer Networking</a></h3>
                        <p>Delve into the essential concepts of computer networking, protocols, and technologies shaping modern networks.</p>
                    </div>


                    <div class="resource-card">
                        <img src="/Images/Background/Library_Map.png" alt="Library Map" />
                        <h3><a href="/Visit/locations.php">Library Location</a></h3>
                        <p>Find out where we are located and visit us to explore our physical collections. if you</p>
                    </div>
                </div>
            </div>

            <footer>
                <div class="footer-container">
                    <div class="footer-about">
                        <a href="About/index.php">
                            <h3> About Us</h3>
                        </a>
                        <p>Mentora Nexus is your gateway to endless reads. Explore a wide range of books, discover new
                            authors, and enjoy seamless shopping.</p>
                    </div>

                    <div class="footer-contact">
                        <a id="Contact" href="Contact/index.php"> Contact Us</a>
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

    