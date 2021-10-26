<?php 
require_once 'classes/usuarios.php';
 $u = new Usuario;

?>



<!DOCTYPE html>
<html lang="pt-br">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
    <div id="corpo-login">
        <h1>Login</h1>
        <form method="POST" >
        <input type="email" name="email" placeholder="Usuário">
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Entrar">
        <a href="cadastrar.php">Ainda não é inscrito?<strong> Cadastre-se</strong></a>
        </form>
    </div>
    

    <?php 
    if(isset($_POST['email']))
    {

        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);









    }
    
    
    
    
    
    
    
    
    
    
    ?>







    
    </body>
</html>