
<?php
    $host = "localhost";
    $user = "root";
    $pw = "";
    $db = "pdo_fendi";

    try {
        $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";
        $pdo = new PDO($dsn, $user, $pw);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Koneksi Berhasil! <br>";
    } catch (PDOException $e) {
        echo "Koneksi Gagal: " . $e->getMessage();
    }
?>