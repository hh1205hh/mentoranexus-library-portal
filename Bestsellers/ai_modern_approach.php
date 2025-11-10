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
                    <li><a href="clean_code.php">Crafting Exceptional Code with *Clean Code*</a></li>
                    <li><a href="#" class="active">The Ultimate AI Guide: *Artificial Intelligence: A Modern
                            Approach*</a></li>
                </ul>
            </aside>

            <div class="article">
                <h2>Artificial Intelligence: A Modern Approach By<i> Stuart Russell </i> and <i>Peter Norvig</i></h2>
                <figure>
                    <a target="_blank" href="../Images/Bestsellers/AI_MODERN_APPROACH.jpeg"><img
                            src="../Images/Bestsellers/AI_MODERN_APPROACH.jpeg"
                            alt="Image of the AI Modern Approach book"></a>
                    <figcaption>Cover of <strong> Atificial Intelligence: A Modern Approach</strong></figcaption>
                </figure>
                <p><strong>Introduction: </strong> <em>Artificial Intelligence: A Modern Approach</em> by Stuart Russell and Peter Norvig is
                    considered the leading textbook on artificial intelligence (AI), accompanying website at <a href="https://aima.cs.berkeley.edu/"> AI Modern Approach</a> ,has set the standard for
                    teaching and learning about AI in academia. First published in 1995, this book provides a
                    comprehensive introduction to the field, blending theoretical concepts with practical applications.
                    It is widely regarded as an essential resource for students, researchers, and professionals looking
                    to understand the foundations and advancements of AI.</p>

                <p><strong>Why This Book is So Special:</strong> What makes *Artificial Intelligence: A Modern Approach*
                    exceptional is its thoroughness and accessibility. Russell and Norvig present complex topics in AI
                    with clarity, providing a balanced mix of mathematical rigor, algorithms, and practical examples.
                    The book also emphasizes the importance of understanding the underlying principles that drive AI,
                    rather than simply applying techniques. This makes it suitable for both beginners who are new to the
                    field and experts seeking a deeper understanding of AI systems.</p>

                <p><strong>The Role of AI in Modern Society:</strong> AI has become a transformative force in many
                    industries, from healthcare and finance to autonomous systems and robotics. This book covers the
                    fundamental techniques and theories behind AI, such as search algorithms, machine learning,
                    probabilistic reasoning, and knowledge representation. It provides a solid foundation for
                    understanding how AI is shaping the future, both in terms of practical applications and ethical
                    considerations.</p>

                <p><strong>Structure of the Book:</strong> *Artificial Intelligence: A Modern Approach* is organized
                    into several parts that cover the major areas of AI. The first section introduces the foundational
                    concepts of AI, including problem-solving, search, and agent-based systems. The later chapters dive
                    into more specialized topics such as machine learning, neural networks, natural language processing,
                    and robotics. Each chapter builds upon previous concepts, with exercises and examples that help
                    readers apply the theory in real-world contexts.</p>

                <p><strong>Legacy:</strong> Russell and Norvig’s book has become a classic in the field of artificial
                    intelligence and is used as the primary textbook in many AI courses around the world. Its influence
                    extends beyond academia into the world of AI research and development. By providing a clear and
                    structured approach to AI, the book has empowered generations of students and professionals to
                    understand and contribute to the rapidly evolving field of artificial intelligence.</p>
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