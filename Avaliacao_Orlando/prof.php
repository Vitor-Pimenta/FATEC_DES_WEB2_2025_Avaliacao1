<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){ //Verifica se é o professor que está logado
    header("location: index.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="pt_BR">
    <head>
        <meta charset="UTF-8">
        <title>Área dos Professores</title>
        <link rel="stylesheet" href="style2.css">
    </head>
            <h2>Bem vindo Professor</h2><br>

    <body>
        <div class="container">
        <a href="listarlivros.php">
        <button>Listar Livros</button>   
        </a>
        
        <a href="cadastrarpedido.php">
        <button>Cadastre um Pedido</button>   
        </a>
        </div>
    </body>

</html>