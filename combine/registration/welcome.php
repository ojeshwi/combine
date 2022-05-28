<?php

session_Start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header("location: login.php");
}
?>


<html>
<head>
    <title> PHP login system!- HOME</title>
</head>
<body>
<a href="logout.php">logout</a>
<a href="change-password.php">CHANGE PASSWORD</a>

<div class="container mt-4">
    <h3><?php echo "welcome " . $_SESSION['username']?>! you can now use the website
</body>
</html> 