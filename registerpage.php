<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if all required fields are provided
    if (isset($_POST["username"]) && isset($_POST["email"]) && isset($_POST["password"]) && isset($_POST["confirm_password"])) {
        // Retrieve data from the form
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // Perform validation
        if ($password !== $confirm_password) {
            $error_message = "Passwords do not match. Please try again.";
        } else {
            // Here you can perform additional validation, like checking if the username or email already exists in your database

            // Assuming the validation passes, you would typically insert the new user into your database

            // Establish connection to your MySQL database
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

            // Prepare SQL statement to insert the new user into the database
            $sql = "INSERT INTO user (username, email, password) VALUES ('$username', '$email', '$password')";

            if ($conn->query($sql) === TRUE) {
                // Registration successful, redirect to login page or perform any other actions
                header("Location: loginpage.php");
                exit;
            } else {
                // Display an error message if registration fails
                $error_message = "Error: " . $sql . "<br>" . $conn->error;
            }

            // Close the database connection
            $conn->close();
        }
    } else {
        // Display an error message if any required field is missing
        $error_message = "Please fill in all the fields.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="registerstyle.css">
    <title>Register Form</title>
</head>
<body>
    <header>
        <div class="logo">
            <img src="28267842_7.jpg" alt="Logo">
            <span class="company-name">Sam.</span>
        </div>
            <nav class="navigation">
            <a href="firstpage.html">Home</a>
            <a href="#">Shop</a>
            <a href="#">About</a>
            <a href="#">Contact</a>
            <button class="btnlogin">Login</button>
        </nav>
    </header>

    <div class="wrapper">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <h1 id="Register_h1">Register</h1>
            <?php if(isset($error_message)) { ?>
                <p class="error"><?php echo $error_message; ?></p>
            <?php } ?>
            <div class="input-box">
                <input type="text" name="username" placeholder="Enter Username" required>
                <i class='bx bxs-user'></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="Enter Email" required>
                <i class='bx bx-envelope'></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Enter Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <div class="input-box">
                <input type="password" name="confirm_password" placeholder="Confirm Password" required>
                <i class='bx bxs-lock-alt' ></i>
            </div>
            <button type="submit" class="btn">Register</button>
            <div class="register-link">
                <p>Account Exists?  <a href="loginpage.html">Login</a></p>
            </div>
        </form>
    </div>
</body>
</html>
