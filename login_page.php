<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> <!-- Font Awesome for icons -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .login-container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 30px;
        }
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .login-container input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
        }
        .login-container input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .error-message {
            color: #ff0000;
            margin-bottom: 20px;
        }
        .register-button {
            text-align: center;
        }
        .register-button a {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2>Login</h2>
        <?php
            // Checking if there's an error message
            if(isset($_GET['error'])){
                echo "<p class='error-message'>" . htmlspecialchars($_GET['error']) . "</p>";
            }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="submit" value="Login" name="submit">
        </form>

        <div class="register-button">
            <p>Don't have an account? <a href="register_page.php">Register</a></p>
        </div>
    </div>

    <?php
        // Including my database connection
        include("php/config.php");

        // Checking if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
            // Getting username and password from the form
            $username = $_POST['username'];
            $password = $_POST['password'];

            // Query checking if the username and password match
            $query = "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
            $result = mysqli_query($con, $query);

            // Checking if the query returned any rows
            if (mysqli_num_rows($result) == 1) {
                // Login successful
                // Start session and store user data if needed
                session_start();
                $_SESSION['username'] = $username; // Example: Storing username in session
                // Redirecting to the home page after login
                header("Location: home.php?login=success");
                exit();
            } else {
                // Login failed
                $error = "Incorrect username or password";
                // Redirecting back to the login page with the error message
                header("Location: login_page.php?error=".urlencode($error));
                exit(); // Stopping further execution to prevent displaying the form again
            }
        }
    ?>
</body>
</html>
