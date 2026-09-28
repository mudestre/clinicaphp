<?php
// Conexão com o banco de dados (substitua pelos seus dados)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "clinica";

$conexao = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conexao->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conexao->connect_error);
}
?>
