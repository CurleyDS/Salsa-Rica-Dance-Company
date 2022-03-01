<?php
// Require DB settings with connection variable
require_once "includes/database.php";

// If user isn't logged in, redirect to index.php
if (!isset($_SESSION['user'])) {
    header('Location: /Salsa-Rica-Dance-Company/');
}

// Check if form has been submitted
if (isset($_POST['submit'])) {
    session_destroy();
    header('Location: /Salsa-Rica-Dance-Company/');
}

//Close connection
mysqli_close($db);
?>