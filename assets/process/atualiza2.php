<?php
include_once("../config/conexao.php");

$id = $_POST['id'];

$dados = mysqli_fetch_assoc(mysqli_query($conexao, "SELECT Cod_produto, Nome_produto,Preco
                                                    FROM Produto
                                                    WHERE Cod_produto = $id
"));
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Editar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css" />
</head>

<body>

<div class="container mt-5">
    <div class="card p-4">

        <h4>Editar Produto</h4>

        <form action="atualiza3.php" method="POST">

            <input type="hidden" name="id" value="<?= $dados['Cod_produto'] ?>">

            <label>Produto</label>
            <input type="text" class="form-control mb-2" value="<?= $dados['Nome_produto'] ?>" disabled>

            <label>Preço</label>
            <input type="text" name="preco" class="form-control mb-3" value="<?= $dados['Preco'] ?>" required>

            <button class="btn btn-success">Salvar</button>
            <a class='btn btn-secondary' href='../pages/login.html'>Voltar</a>

        </form>

    </div>
</div>

<script src="../scripts/script.js"></script>
</body>
</html>
