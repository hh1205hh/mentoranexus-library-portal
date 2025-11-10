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
                    <li><a href="#" class="active">Unlocking C Mastery with *The C Programming Language*</a></li>
                    <li><a href="com_net.php">A Simplified Path to Networking: *Computer Networking: A Top-Down
                            Approach*</a></li>
                    <li><a href="pro_langu_prag.php">Decoding Programming Languages: *Programming Language
                            Pragmatics*</a></li>
                    <li><a href="oper_sys_concep.php">Operating Systems Unveiled: *Operating System Concepts*</a></li>
                    <li><a href="clean_code.php">Crafting Exceptional Code with *Clean Code*</a></li>
                    <li><a href="ai_modern_approach.php">The Ultimate AI Guide: *Artificial Intelligence: A Modern
                            Approach*</a></li>
                </ul>
            </aside>
            <div class="article">
                <h2>The C Programming Language By <i>Brain Kernighan</i> and <i>Dennis Ritchie</i></h2>
                <figure>
                    <a target="_blank" href="../Images/Bestsellers/C_PRO_LANGU.jpg"><img
                            src="../Images/Bestsellers/C_PRO_LANGU.jpg"
                            alt="Image of the C programming language book"></a>
                    <figcaption>Cover of <strong> C Programming Language</strong></figcaption>
                </figure>
                <p><strong>Introduction:</strong> *The C Programming Language* by Brian W. Kernighan and Dennis M.
                    Ritchie, often referred to as "K&R," is one of the most revered textbooks in the history of computer
                    science. It has shaped the learning path of generations of programmers and remains a must-read for
                    anyone seeking to understand the fundamentals of C programming. First published in 1978, this book
                    set the foundation for the C programming language, which continues to be a cornerstone in software
                    development, operating systems, and more.</p>

                <p><strong>Why This Book is So Special:</strong> Unlike many textbooks that are filled with jargon and
                    complex terminology, K&R takes a direct and no-nonsense approach to teaching. Its elegant, simple
                    structure makes it accessible to both beginners and advanced programmers. The book’s clear, concise
                    examples allow the reader to grasp key concepts quickly, and its practical exercises reinforce the
                    knowledge gained.</p>

                <p><strong>The Influence of the C Language:</strong> C programming has played a pivotal role in the
                    development of modern computing. From system software to applications, C’s efficiency and control
                    over hardware have made it indispensable. The C programming language has influenced many other
                    languages, such as C++, Java, and Python, and remains relevant even decades after its creation.</p>

                <p><strong>Structure of the Book:</strong> The C Programming Language is divided into two parts. The
                    first part covers the language syntax, basic constructs, and simple examples. The second part dives
                    into advanced topics like pointers, structures, and file handling. It is an excellent mix of theory
                    and practice, ensuring that readers are well-prepared to write their own programs and understand how
                    they work at a low level.</p>

                <p><strong>Legacy:</strong> Not only has *The C Programming Language* become a staple textbook in
                    university courses worldwide, but it has also maintained a lasting influence on the software
                    development community. It is a testament to the clarity and precision of Kernighan and Ritchie’s
                    teaching style and their ability to distill complex concepts into simple terms.</p>
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