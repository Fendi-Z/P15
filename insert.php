
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

        $sql = "INSERT INTO users (username, email) VALUES 
                    ('fendi', 'fendi@gmail.com');
        ";
        
        // Menjalankan perintah SQL
        $pdo->exec($sql);
        echo "New record created successfully. <br>";
    } catch(PDOException $e) {
        // Menangani kesalahan koneksi atau query
        echo "Connection failed : " . $e->getMessage();
    }

    $pdo = null;
?>