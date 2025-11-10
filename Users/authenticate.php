    
    <?php
    session_start(); 

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Read existing users
        $usersFile = 'users.json';
        if (!file_exists($usersFile)) {
            echo "No users registered.";
            exit; 
        }

        $users = json_decode(file_get_contents($usersFile), true);

        foreach ($users as $user) {
            if ($user['email'] === $email && password_verify($password, $user['password'])) {
                $_SESSION['logged_in'] = true; // Set the session variable
                $_SESSION['user_email'] = $email; // Optional: Store user email or other info

                echo "
                    <script>
                        alert('You logged in su ccessfully! Welcome to Mentora Nexus.');
                        window.location.href = '../index.php';
                    </script>
                ";
                exit;
            }
        }

        echo "
            <script>
                alert('Invalid email or password. Please try again.');
                window.history.back();
            </script>
        ";
    }
?>

