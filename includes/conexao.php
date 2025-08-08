<?php

// CONFIG BANCO
// $host = 'sql112.infinityfree.com';
// $db = 'if0_39097113_bonanza';
// $user = 'if0_39097113';
// $pass = 'dAOqPvhkhhW';
// $charset = 'utf8mb4';

$host = 'localhost';
$db = 'bonanza';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
} catch (PDOException $e) {
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}

?>