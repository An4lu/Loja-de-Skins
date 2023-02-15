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
    <div class = container>
        
<section class="area-login">
        <div class="login">
            <div><img src="../public/img/logo1.png">
        </div>
        <form action="" method="post">
           
        <input type="text" name="txtu" placeholder="Nome Registro" autofocus>    
        <input type="password" name="txts" placeholder = "Codigo Acesso"> 
        <input type="submit" value="Logar"> 
        </form>

</div>
</section>

    <?php

        include("../bd/conexao.php");
        include ("../controls/adm.php");

        if($_POST)

        {

            $Nome_Registro = $_POST ['txtu'];

            $Codigo_Acesso = $_POST ['txts'];   
            
            if(efetuarLoginADM($conexao, $Nome_Registro, $Codigo_Acesso))

            {

                session_start();

                $_SESSION['Nome_Registro'] =$Nome_Registro;

                $_SESSION['Codigo_Acesso']='ativo';

                header ("Location: adm_menu.php");
                die();

            }
            else{
                echo ("<p>Usuário não encontrado</p>");
            }

        }

    ?>
</div>
</body>
</html>