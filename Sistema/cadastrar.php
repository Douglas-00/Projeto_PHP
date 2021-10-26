<?php 

require_once 'CLASSES/usuarios.php';
$u = new Usuario;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div id="corpo-form">
        <h1>Cadastrar</h1>
        <form method="POST" >
        <input type="text" name="nome"         placeholder="Nome Completo" maxlength="30">
        <input type="text" name="telefone"     placeholder="DDD + Celular" maxlength="12">
        <input type="email" name="email"       placeholder="Usuário" maxlength="40">
        <input type="password"  name="senha"   placeholder="Senha" maxlength="15">
        <input type="password" name="confSenha"placeholder="Confirmar Senha">
        <input type="submit" value="Cadastrar">
       
    </div>
    

    </form>
    <?php 
    
    //verificar se clicou no botão
if(isset($_POST['nome'])){
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);

    //verificar se está preenchido
    if(!empty($nome)&& !empty($telefone)&& !empty($email) && !empty($senha)
    && !empty($confirmarSenha))
    {
        $u->conectar("projeto_login","localhost","root","1234");
        if($u->msgErro == "")//está tudo certo
        {
            if($senha == $confirmarSenha)
            {
               if($u->cadastrar($nome,$telefone,$email,$senha))
               {?>
                <div id="msg-sucesso">Cadastrado com Sucesso! Acesse para Entrar!</div>
                }
                <?php
                } else{
                    ?>
                        <div class="msg-erro">Email já Cadastrado!</div>
                    <?php
                    }
               
            }
            else
            {
                ?>
                <div class="msg-erro">Senha e Confirmar Senha não correspondem!</div>
            <?php
                
             }
           
        }else{
            ?>
        <div class="msg-erro"><?php echo "Erro: ".$u->msgErro;?></div>
            <?php
            
        }

    }else{
        ?>
        <div class="msg-erro">Preencha todos os Campos!!!</div>
    <?php
       
    }

 }
 
    
    
    
    ?>
</body>
</html>