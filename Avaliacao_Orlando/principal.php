<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    session_start();
    if($_POST['username'] == 'professor' and $_POST['senha'] == 'professor'){ //Verifica se é mesmo o Professor que está acessando o Site se sim ele é direcionado para o prof.php
        $_SESSION['loggedin'] = TRUE;
         header("location: prof.php");
    } elseif($_POST['username'] == 'biblio' and $_POST['senha'] == 'biblio'){ //Verifica se e o Bibliotecário que está acessando o Site, se sim ele é direcionado para o biblio.php
        $_SESSION['loggedin'] = TRUE;
         header("location: biblio.php");
    }
}
?>
<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <title>Site da Biblioteca Maneira</title>
    <link rel="stylesheet" href="style.css">
</head>
    <h2>Área de Login</h2><br>
    <body>
        <div class="container">
            <div class="box">
        <h3>Digite seu usuário e sua senha.</h3>

             <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                <div class="label">
                <label>Usuário</label>
                <input type="text" name="username" class="label">
                </div>    

                <div class="form-group">
                <label>Senha</label>
                <input type="password" name="senha" class="label">
                </div>
                <div class="form-group">
                <input type="submit" class="button" value="Acessar">
                </div>
            </form>   
            </div>
            </div>
</body>

</html>





