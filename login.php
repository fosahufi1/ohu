<?php
session_start();

// 🔹 Lista użytkowników w formacie "login" => "hasło"
$users = array(
    "admin" => "mojehaslo123",   // ← zmień tutaj na swój login i hasło
    "test"  => "1234",           // ← dodatkowy użytkownik testowy
    // Możesz dodawać kolejne: "nowylogin" => "nowehaslo",
);

// 🔹 Sprawdzanie danych z formularza logowania
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (isset($users[$username]) && $users[$username] === $password) {
        // ✅ Logowanie udane
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("Location: dashboard.php");
        exit;
    } else {
        // ❌ Błędne dane logowania
        echo "Błędny login lub hasło.";
    }
}
?>


