<?php
include_once("../config/conexao.php");

$fornecedor = mysqli_query($conexao, "SELECT * FROM Fornecedor");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Produto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css" />
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Cadastro de Fornecedor</h2>

        <form action="../process/cadastro_produto2.php" method="post">

            <div class="mb-3">
                <label class="form-label">Nome do Produto</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Preço</label>
                <input type="text" class="form-control" name="preco" placeholder="Digite o valor" required>
            </div>

            <div class="mb-3">
                <label>Fornecedor</label>
                <select name="fornecedor" class="form-select" required>
                    <option value="">Selecione</option>

                    <?php
                    while ($mostra = mysqli_fetch_assoc($fornecedor)) {
                        echo "<option value='{$mostra['Cod_fornecedor']}'>{$mostra['Nome_fornecedor']}</option>";
                    }

                    ?>

                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-secondary" href="../pages/login.html">Voltar</a>

        </form>
    </div>


    <script src="../scripts/script.js"></script>
</body>

</html>