<!-- Arquivo que configura a conexão com o MYSQL via PDO -->

<?php
$host = 'localhost';
$dbname = 'usuario';
$username = 'root';
$password = '';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erro na conexão";
}
?>