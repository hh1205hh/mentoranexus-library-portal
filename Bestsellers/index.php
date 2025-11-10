<?php
session_start();
$loggedIn = isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Bestselling Computer Science Textbooks | Mentora Nexus</title>
    <link href="../css/header.css" type="text/css" rel="stylesheet" />
    <link href="../css/footer.css" type="text/css" rel="stylesheet" />
    <link href="../css/nav-menu.css" type="text/css" rel="stylesheet" />
    <link href="../css/bestseller.css" type="text/css" rel="stylesheet" />

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
                    <li><a href="../Bestsellers/index.php" class="active">Bestsellers</a></li>
                    <li><a href="../New-Arrivals/index.php">New Arrivals</a></li>
                </ul>
            </nav>

        </header>

        <div id="content">
            <div class="container">
                <p><strong>
                        <h2>The Best-Selling Computer Science Textbooks</h2>
                    </strong></p>
                <ul>
                    <li><a href="ai_modern_approach.php">Artificial Intelligence: A Modern Approach by Stuart Russell
                            and Peter Norvig</a> - A comprehensive introduction to the field of AI, covering topics like
                        machine learning, neural networks, and intelligent agents, providing a solid foundation for both
                        theoretical and practical AI applications.</li>
                    <li><a href="c_pro_langu.php">The C Programming Language by Brian W. Kernighan and Dennis M.
                            Ritchie</a> - A classic guide to the C programming language, offering concise and clear
                        examples that are essential for understanding the language’s syntax and efficient programming
                        practices.</li>
                    <li><a href="clean_code.php">Clean Code by Robert C. Martin</a> - A practical handbook focused on
                        writing code that is simple, readable, and maintainable, emphasizing good practices and
                        principles that improve the overall quality of software development.</li>
                    <li><a href="com_net.php">Computer Networking: A Top-Down Approach by James F. Kurose and Keith W.
                            Ross</a> - A thorough exploration of computer networking, presenting the subject from a
                        top-down approach, starting with high-level concepts and delving into the details of network
                        protocols and systems.</li>
                    <li><a href="oper_sys_concep.php">Operating System Concepts by Abraham Silberschatz, Peter B.
                            Galvin, and Greg Gagne</a> - A definitive textbook covering the fundamentals of operating
                        system design, including processes, memory management, file systems, and security, with
                        real-world examples to help understand complex concepts.</li>
                    <li><a href="pro_langu_prag.php">Programming Language Pragmatics by Michael L. Scott</a> - A
                        detailed guide to programming languages, examining syntax, semantics, and implementation
                        techniques, and offering insights into the design and implementation of modern programming
                        languages.</li>
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