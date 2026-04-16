<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Fornecedor</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css" />
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Cadastro de Fornecedor</h2>

        <form action="../process/cadastro_fornecedor2.php" method="post">

            <div class="mb-3">
                <label class="form-label">Nome</label>
                <input type="text" class="form-control" name="nome" placeholder="Digite seu nome" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Telefone</label>
                <input type="text" id="telefone" class="form-control" name="telefone" placeholder="(00) 00000-0000"
                    maxlength="15" required>

            </div>
           


            <div class="mb-3">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" name="endereco" placeholder="Digite seu endereço" required>
            </div>

            <div class="mb-3">
                <label class="form-label">UF</label>
                <select name="uf" class="form-select" required>
                    <option value="" disabled selected>Selecione a UF</option>
                    <option value="MG">MG</option>
                    <option value="SP">SP</option>
                    <option value="RJ">RJ</option>
                    <option value="ES">ES</option>
                    <option value="BA">BA</option>
                    <option value="PR">PR</option>
                    <option value="SC">SC</option>
                    <option value="RS">RS</option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar</button>
            <a class="btn btn-secondary" href="../pages/login.html">Voltar</a>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../scripts/script.js"></script>

</body>

</html>