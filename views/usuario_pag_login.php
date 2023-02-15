<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/style_form.css">
 

    <title>Document</title>

</head>

<body>
<section class="area-login">
        <div class="login">
            <div><img src="../public/img/logo1.png">
        </div>
        <form action="" method="post">
           
        <input type="text" name="txtu" placeholder="Email" autofocus>    
        <input type="password" name="txts" placeholder = "Senha"> 
        <input type="submit" value="Logar"> 
        </form>

       <p> Não possui um login? <a href="usuario_cad.php">Cadastrar</a></p>
       <p>Você é um gerente?<a href="adm_pag_login.php">Entrar</a></p>



   

    <?php

        include("../bd/conexao.php");
        include ("../controls/usuario.php");

        if($_POST)

        {

            $email = $_POST ['txtu'];

            $senha = $_POST ['txts'];   
            
            if(efetuarLoginUser($conexao, $email, $senha))

            {

                session_start();

                $_SESSION['email'] =$email;

                $_SESSION['senha']='ativo';

                header ("Location: index.php");
                die();

            }
            else{
                echo ("<p>Usuário não encontrado</p>");
            }

        }

    ?>
    </div>
</section>
</body>

</html>