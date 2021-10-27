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
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
    <div id="corpo-login">
        <h1>Login</h1>
        <form method="POST" id="form" >
        <input type="email" name="email" class="form-control" placeholder="Usuário">
        <input type="password" name="senha" class="form-control" placeholder="Senha">
        <input type="submit" value="Entrar" class="btn btn-primary">
        
        <a href="cadastrar.php" id="link">Ainda não é inscrito?<strong> Cadastre-se</strong></a>
        </form>
    </div>
    

    <?php 
    if(isset($_POST['email']))
    {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if(!empty($email) && !empty($senha))
        {
            $u->conectar("projeto_login","localhost","root","1234");
            if($u->msgErro == ""){
                    if( $u->logar($email,$senha))
                    {
                        header("location:Home.php");
                    }else{
                        ?>
                        <div class="msg-erro">Email e/ou senha estão incorretos!</div>
    
                        <?php
                    }
            }
            else
            {?>
                <div class="msg-erro">
                    <?php echo "Erro: ".$u->msgErro;?>
                </div>
                
                <?php
            }
        }else
        {   ?>
            <div class="msg-erro">Preencha todos os Campos!</div>
            
            <?php
        }








    }
    
    
    
    
    
    
    
    
    
    
    ?>


    


<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>


    </body>
</html>