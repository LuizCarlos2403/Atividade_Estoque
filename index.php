<?php
include_once("assets/config/conexao.php");

// BUSCAR CARGOS
$cargos = mysqli_query($conexao, "SELECT Cargo FROM Usuario");
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/style/style.css" />
</head>

<body class="bg-light">

<div class="container d-flex justify-content-center align-items-center vh-100">

    <div class="card p-4 shadow" style="width: 350px;">

        <h3 class="text-center mb-3">Login</h3>

        <form action="assets/process/login.php" method="POST">

            <div class="mb-3">
                <label>Usuário</label>
                <input type="text" name="nome" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Senha</label>
                <input type="password" name="senha" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Cargo</label>
                <select name="cargo" class="form-select" required>
                    <option value="">Selecione</option>

                    <?php
                    if (mysqli_num_rows($cargos) > 0) {
                        while ($mostra = mysqli_fetch_assoc($cargos)) {
                            echo "<option value='{$mostra['Cargo']}'>{$mostra['Cargo']}</option>";
                        }
                    } else {
                        echo "<option disabled>Nenhum cargo encontrado</option>";
                    }
                    ?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary w-100">Entrar</button>

        </form>

    </div>

</div>
<script src="assets/scripts/script.js"></script>
</body>
</html>
