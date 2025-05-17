<?php
session_start();
echo "<h2>Thank you for logging in!</h2>";
echo "<p>Email: " . $_SESSION['email'] . "</p>";
echo "<p>Password: " . $_SESSION['password'] . "</p>";
session_destroy();
?>