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
                    <li><a href="#" class="active">A Simplified Path to Networking: *Computer Networking: A Top-Down
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
                <h2>Computer Networking: A Top-Down Approach <i>by James F. Kurose</i> and <i>Keith W. Ross</i></h2>
                <figure>
                    <a target="_blank" href="../Images/Bestsellers/COM_NET.jpg"><img
                            src="../Images/Bestsellers/COM_NET.jpg"
                            alt="Image of the Computer Networking: A Top-Down Approach book"></a>
                    <figcaption>Cover of <strong> Computer Networking: A Top-Down Approach </strong></figcaption>
                </figure>
                <p><strong>Introduction:</strong> *Computer Networking: A Top-Down Approach* by James F. Kurose and
                    Keith W. Ross is a renowned textbook that has become a staple in the study of computer networking.
                    First published in 1996, it revolutionized how students and professionals approach the concept of
                    networking by focusing on a top-down perspective. This approach starts with the application layer
                    and works its way down to the physical layer, providing readers with a clear understanding of how
                    networks function from both a high-level and low-level perspective.</p>

                <p><strong>Why This Book is So Special:</strong> One of the book’s standout features is its ability to
                    make complex networking concepts accessible to students with diverse backgrounds. Kurose and Ross
                    simplify intricate theories with relatable examples, illustrations, and real-world applications. The
                    book’s engaging writing style, combined with practical exercises, helps readers connect theory with
                    hands-on experience, making it an invaluable resource for learners and professionals alike.</p>

                <p><strong>The Impact of Networking:</strong> Networking has become the backbone of modern
                    communication, powering everything from the internet to enterprise systems. This book highlights the
                    significance of computer networks in today’s world and teaches readers the essential concepts of
                    networking, including protocols, security, and performance optimization. By providing a clear
                    understanding of how networks operate, it helps bridge the gap between theoretical knowledge and
                    practical implementation.</p>

                <p><strong>Structure of the Book:</strong> *Computer Networking: A Top-Down Approach* is structured in a
                    way that ensures readers grasp the key networking concepts incrementally. The book begins by
                    covering the application layer, discussing network protocols, and then moves to the transport,
                    network, and link layers. Each section provides detailed explanations supported by practical
                    examples and exercises that deepen the reader’s understanding of each topic.</p>

                <p><strong>Legacy:</strong> Kurose and Ross’s work has become a cornerstone in networking education. Its
                    top-down approach has been adopted by many other textbooks, and the book remains one of the most
                    widely used texts in computer networking courses worldwide. It continues to influence the way
                    networking is taught and learned, providing students with a solid foundation for understanding
                    modern networking concepts.</p>
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