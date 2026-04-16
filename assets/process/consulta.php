<?php
include_once("../config/conexao.php");

// BUSCAR FORNECEDORES
$fornecedor = mysqli_query($conexao, "SELECT * FROM Fornecedor");

// FILTRO
$filtro = "";
if (isset($_GET['fornecedor']) && !empty($_GET['fornecedor'])) {
    $f = intval($_GET['fornecedor']); // segurança
    $filtro = "WHERE Produto.Cod_fornecedor = $f";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Consulta de Produtos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style/style.css" />
</head>

<body>

    <div class="container mt-5">
        <h2 class="mb-4">Produtos Cadastrados</h2>


        <form method="GET" class="mb-4">
            <div class="row">
                <div class="col-md-6">
                    <select name="fornecedor" class="form-control">
                        <option value="">Todos os fornecedores</option>

                        <?php while ($f = mysqli_fetch_assoc($fornecedor)) {
                            echo "<option value='{$f['Cod_fornecedor']}'>{$f['Nome_fornecedor']}</option>";
                        }

                        ?>

                    </select>
                </div>

                <div class="col-md-2">
                    <button class="btn btn-primary">Filtrar</button>
                </div>
            </div>
        </form>



        <?php
        $sql = "SELECT Produto.Cod_produto, Produto.Nome_produto, Produto.Preco, Fornecedor.Nome_fornecedor
                FROM Produto
                INNER JOIN Fornecedor 
                ON Produto.Cod_fornecedor = Fornecedor.Cod_fornecedor
                $filtro
                ORDER BY Produto.Nome_produto";

        $resultado = mysqli_query($conexao, $sql);

        if (mysqli_num_rows($resultado) > 0) {

            echo "<div class='table-container'>
                <table class='table-dark-custom'>

                <thead>
                     <tr>
                        <th>ID</th>
                        <th>Produto</th>
                        <th>Preço</th>
                        <th>Fornecedor</th>
                    </tr>
<               /thead>
<tbody>";

            while ($dados = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>{$dados['Cod_produto']}</td>";
                echo "<td class='fw-semibold'>{$dados['Nome_produto']}</td>";
                echo "<td class='text-success fw-bold'>R$ " . number_format($dados['Preco'], 2, ',', '.') . "</td>";
                echo "<td>{$dados['Nome_fornecedor']}</td>";
                echo "</tr>";
            }

            echo "</tbody></table></div>";


        } else {
            echo "<div class='alert alert-danger text-center'>
                Nenhum produto encontrado
              </div>";
        }
        ?>

        <a href="../pages/login.html" class="btn btn-secondary">Voltar</a>
    </div>
    


    <script src="../scripts/script.js"></script>
</body>

</html>