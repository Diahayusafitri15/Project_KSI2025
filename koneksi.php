<?php
// index.php - PHP native + Bootstrap (MySQL/PDO)

// --- BACKEND: Koneksi Database MySQL (Laragon) ---

$host='127.0.0.1';
$db='ksi2025'; // Pastikan database 'ksi2025' sudah ada di Laragon
$user = 'root'; 
$pass = ''; // Password default Laragon (biasanya kosong)
$charset = 'utf8mb4';

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
];

try {
    $pdo = new PDO($dsn, $user, $pass, $options);
} catch (\PDOException $e) {
    echo "Koneksi database gagal: " . $e->getMessage();
    exit;
}
?>