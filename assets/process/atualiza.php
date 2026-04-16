<?php
include_once("../config/conexao.php");

$produto = mysqli_query($conexao, "SELECT * FROM Produto");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Selecionar Produto</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css" />
</head>

<body>

    <div class="container mt-5">
        <div class="card p-4">

            <h4>Selecionar Produto</h4>

            <form action="../process/atualiza2.php" method="POST">

                <select name="id" class="form-control mb-3" required>
                    <option value="">Selecione</option>

                    <?php
                    while ($mostra = mysqli_fetch_assoc($produto)) {
                        echo "<option value='{$mostra['Cod_produto']}'>{$mostra['Nome_produto']}</option>";
                    }

                    ?>
                </select>

                <button class="btn btn-primary">Continuar</button>
                <a class='btn btn-secondary' href='../pages/login.html'>Voltar</a>

            </form>

        </div>
    </div>

    <script src="../scripts/script.js"></script>
</body>

</html>