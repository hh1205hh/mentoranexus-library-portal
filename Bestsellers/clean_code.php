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
            <aside>
                <h1>Related Articles</h1>
                <ul>
                    <li><a href="c_pro_langu.php">Unlocking C Mastery with *The C Programming Language*</a></li>
                    <li><a href="com_net.php">A Simplified Path to Networking: *Computer Networking: A Top-Down
                            Approach*</a></li>
                    <li><a href="pro_langu_prag.php">Decoding Programming Languages: *Programming Language
                            Pragmatics*</a></li>
                    <li><a href="oper_sys_concep.php">Operating Systems Unveiled: *Operating System Concepts*</a></li>
                    <li><a href="#" class="active">Crafting Exceptional Code with *Clean Code*</a></li>
                    <li><a href="ai_modern_approach.php">The Ultimate AI Guide: *Artificial Intelligence: A Modern
                            Approach*</a></li>
                </ul>
            </aside>

            <div class="article">
                <h2>Clean Code By <i>Robert C. Martin</i></h2>
                <figure>
                    <a target="_blank" href="../Images/Bestsellers/CLEAN_CODE.jpg"><img
                            src="../Images/Bestsellers/CLEAN_CODE.jpg" alt="Image of the Clean Code book"></a>
                    <figcaption>Cover of <strong> Clean Code</strong></figcaption>
                </figure>
                <p><strong>Introduction:</strong> *Clean Code: A Handbook of Agile Software Craftsmanship* by Robert C.
                    Martin, often referred to as "Uncle Bob," is a landmark book in the field of software development.
                    First published in 2008, this book has become a quintessential resource for developers who aim to
                    write code that is not only functional but also readable, maintainable, and efficient. Through
                    practical advice and real-world examples, Martin emphasizes the importance of clean code in creating
                    high-quality software that can be easily understood and modified by others.</p>

                <p><strong>Why This Book is So Special:</strong> What makes *Clean Code* so valuable is its focus on
                    best practices and its commitment to improving the quality of code. Martin provides clear guidelines
                    on how to write code that is simple, elegant, and efficient. He emphasizes the importance of
                    following good coding principles, such as keeping functions small, using meaningful names, and
                    ensuring code readability. The book is filled with real-world examples, and each chapter includes
                    practical tips and techniques that developers can immediately apply to their own projects.</p>

                <p><strong>The Importance of Clean Code:</strong> Clean code is essential for building software that is
                    easy to maintain and extend over time. By following the principles outlined in this book, developers
                    can reduce the risk of introducing bugs, make code easier to test, and simplify future changes. The
                    book teaches that writing clean code is not just about making code work but about making it
                    sustainable for long-term use in a team environment.</p>

                <p><strong>Structure of the Book:</strong> *Clean Code* is divided into multiple chapters, each focusing
                    on a specific aspect of writing clean code. The book covers topics such as naming conventions, code
                    structure, error handling, testing, and refactoring. Each chapter includes both theoretical
                    explanations and practical examples, making it a great resource for both beginner and experienced
                    developers. Martin also discusses the importance of the agile methodology and how clean code
                    supports agile development practices.</p>

                <p><strong>Legacy:</strong> Since its publication, *Clean Code* has had a profound impact on the
                    software development industry. It has become a key resource for developers looking to improve their
                    coding practices and build more maintainable software. The book's emphasis on the craftsmanship of
                    software development has influenced countless developers and has become a staple in many software
                    engineering courses worldwide. Martin’s work continues to shape the way we think about writing
                    quality code and its role in the development process.</p>
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