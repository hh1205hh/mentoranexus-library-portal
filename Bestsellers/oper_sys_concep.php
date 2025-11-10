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
                    <li><a href="#" class="active">Operating Systems Unveiled: *Operating System Concepts*</a></li>
                    <li><a href="clean_code.php">Crafting Exceptional Code with *Clean Code*</a></li>
                    <li><a href="ai_modern_approach.php">The Ultimate AI Guide: *Artificial Intelligence: A Modern
                            Approach*</a></li>
                </ul>
            </aside>

            <div class="article">
                <h2>Operating System Concepts <i>by Abraham Silberschatz, Peter B. Galvin,</i> and <i>Greg Gagne</i>
                </h2>
                <figure>
                    <a target="_blank" href="../Images/Bestsellers/OPER_SYS_CENCEP.jpg"><img
                            src="../Images/Bestsellers/OPER_SYS_CENCEP.jpg"
                            alt="Image of the Operating System Concepts book"></a>
                    <figcaption>Cover of <strong> Operating System Concepts </strong></figcaption>
                </figure>
                <p><strong>Introduction:</strong> *Operating System Concepts*, authored by Abraham Silberschatz, Peter
                    B. Galvin, and Greg Gagne, is one of the most well-respected and widely used textbooks in the field
                    of computer science. First published in 1982, this book offers an extensive and thorough examination
                    of operating system principles and practices. With its clear explanations, real-world examples, and
                    detailed coverage of operating system functionality, it has become a cornerstone for students
                    studying computer systems.</p>

                <p><strong>Why This Book is So Special:</strong> The book stands out for its ability to explain complex
                    operating system concepts in a straightforward and understandable manner. Silberschatz, Galvin, and
                    Gagne have created a balanced resource that caters to both theoretical knowledge and practical
                    application. The text is filled with examples, case studies, and exercises that reinforce key
                    concepts, making it an ideal choice for both beginners and advanced learners who want to gain a
                    deeper understanding of operating systems.</p>

                <p><strong>The Role of Operating Systems:</strong> Operating systems serve as the foundation for all
                    computing devices, managing hardware resources and providing essential services for software
                    applications. This book thoroughly explores topics such as process management, memory management,
                    file systems, and security, giving readers the tools to understand how operating systems work and
                    how they interact with both hardware and software. It also highlights the ongoing development and
                    evolution of modern operating systems in response to emerging technologies.</p>

                <p><strong>Structure of the Book:</strong> *Operating System Concepts* is structured into multiple
                    sections, each focusing on a core aspect of operating system functionality. The book begins with an
                    introduction to operating system basics and progresses through advanced topics such as concurrency,
                    file management, and system security. Each chapter contains a wealth of information, with
                    end-of-chapter exercises to help reinforce the material and encourage further study.</p>

                <p><strong>Legacy:</strong> *Operating System Concepts* has become the definitive textbook in the field,
                    widely used in university courses around the world. Its clear writing style, comprehensive coverage,
                    and practical approach have made it a must-read for students, educators, and professionals alike.
                    The book's enduring success speaks to the authors' expertise and ability to communicate complex
                    topics in an engaging and accessible way, shaping the education of countless students in the field
                    of computer science.</p>
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