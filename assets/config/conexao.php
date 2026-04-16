<?php
// Servidor Local
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "estoque";

// Cria Conexão
$conexao = new mysqli($servername, $username, $password, $dbname);

// Define charset UTF-8
$conexao->set_charset("utf8");

// Verifica Conexão
if ($conexao->connect_error) {
    die("Falha na Conexão com o BD: " . $conexao->connect_error);
}

// Se chegar aqui, a conexão foi bem sucedida
// echo "Conexão realizada com sucesso!";
?>