<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'crud_ifood';

$conn = new mysqli($host, $user, $password, $database,3307);

if($conn ->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}
?>