<?php

$dsn = 'mysql:dbname=ecom;host=127.0.0.1:3306';
$user = 'root';
$password = 'root';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

?>
