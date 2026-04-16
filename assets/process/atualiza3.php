<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../style/style.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css" />
</head>

<body>

<?php
include_once("../config/conexao.php");

$id = $_POST['id'];
$preco = $_POST['preco'];

mysqli_query($conexao, "UPDATE Produto 
                        SET Preco = '$preco'
                        WHERE Cod_produto = $id")or die(mysqli_error($conexao));

echo "<div class='container mt-3 alert alert-success'>Preço atualizado com sucesso!</div>";

echo "<div class='d-flex justify-content-center mt-3'>
        <a class='btn btn-secondary' href='../pages/login.html'>Voltar</a>
      </div>";
?>
<script src="../scripts/script.js"></script>
</body>