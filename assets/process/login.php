<!DOCTYPE html>
<html lang="pt-br">

<head>
     <meta charset="UTF-8">
     <title>Consulta de Produtos</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
     <link rel="stylesheet" href="../style/style.css" />
</head>

<body>
     <?php
     include_once("../config/conexao.php");

     $nome = $_POST['nome'];
     $senha = $_POST['senha'];
     $cargo = $_POST['cargo'];

     $sql = "SELECT * 
        FROM Usuario 
        WHERE Nome_usuario = '$nome' 
        AND senha = '$senha' 
        AND Cargo = '$cargo'";

     $resultado = mysqli_query($conexao, $sql);



     if (mysqli_num_rows($resultado) > 0) {

          header("Location: ../pages/login.html");
          exit();

     } else {

          echo "<div class='container mt-3 alert alert-danger'>Usuário, senha ou cargo incorretos</div>";
          echo "<div class='d-flex justify-content-center mt-3'>
                    <a class='btn btn-secondary' href='../../index.php'>Voltar</a>
               </div>";
     }
     ?>
     <script src="../scripts/script.js"></script>
</body>