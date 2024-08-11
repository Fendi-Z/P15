
<?php
    include "php_PDO.php";

    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $id = $_POST["id"];

        $sql = "DELETE FROM users WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(":id", $id);

        if ($stmt->execure()) {
            echo "Data berhasil dihapus.";
        } else {
            echo "Error " . $stmt->errorInfo()[2];
        }
    }
?>