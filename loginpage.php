<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if both username and password are provided
    if (isset($_POST["username"]) && isset($_POST["password"])) {
        // Retrieve username and password from the form
        $username = $_POST["username"];
        $password = $_POST["password"];

        // Establish a connection to your MySQL database
        $servername = "localhost"; // Change this to your database server
        $db_username = "root"; // Change this to your database username
        $db_password = "Mysql@12"; // Change this to your database password
        $database = "project"; // Change this to your database name

        // Create a connection
        $conn = new mysqli($servername, $db_username, $db_password, $database);

        // Check the connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare a SQL query to fetch user data based on the provided username and password
        $sql = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = $conn->query($sql);

        // Check if a row is returned, indicating successful login
        if ($result->num_rows > 0) {
            // Redirect to a success page or perform any other actions
            header("Location: firstpage.php");
            exit;
        } else {
            // Display an error message if login failed
            $error_message = "Invalid username or password. Please try again.";
        }

        // Close the database connection
        $conn->close();
    } else {
        // Display an error message if username or password is missing
        $error_message = "Please enter both username and password.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="loginstyle.css">
    <title>Login Form</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="28267842_7.jpg" alt="Logo">
            <span class="company-name">Sam.</span>
        </div>
            <nav class="navigation">
            <a href="firstpage.php">Home</a>
            <a href="shop.php">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <button class="btnlogin">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1 id="Login_h1">Login</h1>
            <?php if(isset($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="remember-forgot">
                <label>
                    <input type="checkbox" name="remember">Remember me
                </label>
                <a href="#">Forgot-Password?</a>
            </div>
            <button type="submit" class="btn">Login</button>
            <div class="register-link">
                <p>Don't have account?  <a href="registerpage.php">Register</a></p>
            </div>
        </form>
    </div>
</body>
</html>
