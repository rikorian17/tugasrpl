<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "login";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    // Log error ke file (lebih disarankan)
    error_log("Database connection failed: " . $conn->connect_error, 0); // 0 untuk log ke konfigurasi php.ini

    // Atau, tampilkan pesan error umum ke pengguna
    die("A database error occurred. Please try again later."); // Menghentikan eksekusi skrip
}

// Set character set (penting untuk menangani karakter dengan benar)
if (!$conn->set_charset("utf8mb4")) { // Gunakan utf8mb4 untuk mendukung emoji dan karakter khusus lainnya
    error_log("Error setting character set: " . $conn->error, 0);
    die("A database error occurred. Please try again later.");
}

// Contoh penggunaan (opsional)
// echo "Database connected successfully.";

?>