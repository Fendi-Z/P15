
<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pdo_fendi";
    
    try {
        // Membuat koneksi ke database menggunakan PDO
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

        // Mengatur mode error PDO ke exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "
            CREATE TABLE IF NOT EXISTS users (
                id INT(11) AUTO_INCREMENT PRIMARY KEY,
                username VARCHAR(225) NOT NULL,
                email VARCHAR(225) NOT NULL,
                created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
            );";
        
        // Menjalankan perintah SQL
        $pdo->exec($sql);
        echo "Table users created successfully. <br>";
    } catch(PDOException $e) {
        // Menangani kesalahan koneksi atau query
        echo "Connection failed : " . $e->getMessage();
    }

    $pdo = null;
?>