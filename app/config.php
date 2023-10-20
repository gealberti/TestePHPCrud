<?php
$server = 'localhost';
$username = 'root';
$password = '1234';
$database = 'cadastro_de_pedidos';

$conn = new mysqli($server, $username, $password, $database);

if ($conn->connect_error) {
    die("Erro de conexão: " . $conn->connect_error);
}
?>
