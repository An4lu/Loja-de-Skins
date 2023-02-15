<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style_form.css">

    <title>Cadastrar $usuario</title>
</head>
<body> <center>
    <h1>Cadastre-se</h1>

    <section class="area-login">
 
        <div class="login">
        <div><img src="../public/img/logo1.png">
        </div>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite seu nome" autofocus>
        <input type="text" name="sobrenome" placeholder="Digite seu sobrenome ">
        <input type="text" name="email" placeholder="Digite seu Email">
        <input type="text" name="senha" placeholder="Digite sua Senha">
        <input type="text" name="tel" placeholder="Digite seu Telefone">
       
        <input type="submit" value="Cadastrar">
    </form>
    <p> Já possui cadastro? <a href="usuario_pag_login.php">Entrar</a></p>
    <?php
    include("../bd/conexao.php");
    include("../controls/usuario.php");
        if($_POST)
        {
            $nome=$_POST['nome'];
            $sobrenome=$_POST['sobrenome'];
            $email=$_POST['email'];
            $senha=$_POST['senha'];
            $telefone=$_POST['tel'];
            if(inserir_usuario($conexao,$nome,$sobrenome,$email,$senha,$telefone)){
                echo("<a href = 'index.php'>Entrar na Loja</a>");
                echo ("  ");
            }else{
                $msg=mysqli_error($conexao);
                echo($msg);
            }

            
        }


    ?>
    </div>
    </section> 
</body>
</html>