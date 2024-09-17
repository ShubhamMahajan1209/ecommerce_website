<?php
session_start();
session_destroy(); // Destroy all sessions

// Redirect to the login page or any other desired page
header("Location: home.php");
exit;
?>