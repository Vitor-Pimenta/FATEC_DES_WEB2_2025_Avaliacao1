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
    <title>Área dos Bibliotecários</title>
    <link rel="stylesheet" href="style.css">
</head>
    <h2>Bem vindo Bibliotecário</h2><br>
    <body>
    <h1>Deu certo</h1>    
    </body>

</html>