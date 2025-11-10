    
    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $usersFile = 'users.json';
        $users = file_exists($usersFile) ? json_decode(file_get_contents($usersFile), true) : [];

        // Check if the email or username already exists
        foreach ($users as $user) {
            if ($user['email'] === $email || $user['username'] === $username) {
                echo "Error: Email or username already exists.";
                exit;
            }
        }

        $users[] = [
            'first_name' => $firstName,
            'last_name' => $lastName,
            'email' => $email,
            'username' => $username,
            'password' => $password
        ];

        file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

        echo "Registration successful!";
        header("Location: signin.html");
        exit;
    }
    ?>
