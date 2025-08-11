<?php
session_start();

// Ustawiamy sesję tak, jakby użytkownik był zalogowany
$_SESSION['loggedin'] = true;
$_SESSION['username'] = "admin"; // Możesz zmienić na dowolną nazwę

// Przekierowanie do panelu
header("Location: dashboard.php");
exit;
?>
