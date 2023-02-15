<!DOCTYPE html>
<link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style = "background: #1b1f27">
    <div class="container">
<div class = "jumbotron bg-dark">
 <h1 class = "text-center bg-dark text-white">Bem-Vindo ao Sistema</h1>

    </div>
    <?php
        session_start();
        if($_SESSION['Codigo_Acesso']!= "ativo")
        {
            session_destroy();
            header("Location: adm_pag_login.php");
        }

        echo "<div ><p class = 'text-light'>Olá ".$_SESSION['Nome_Registro'].", bem-vindo ao sistema. Você Deseja:<br>
        <a style = 'color: white' href = '../views/adm_cad.php'> Cadastrar Mais Gerentes </a> <br>
        <a style = 'color: white' href = '../views/adm_lista.php'> Gerenciar Gerentes </a> <br>
        <a style = 'color: white' href = '../views/usuario_lista.php'> Gerenciar Usuários </a> <br>
        <a style = 'color: white' href = '../controls/logout.php'> Sair </a></div> </p>"
    ?>
     <div class="shadow-lg p-3 m-4 bg-dark">
        <li class = "text-white">
            Cadastrar Raridade:
            <ul>
               
                  <a href="raridade_cad.php"><button class="btn btn-success"></button></a>
                
                <?php
                    $_SESSION['Codigo_Acesso'] = 'ativo';
                ?>
            </ul>
        </li>
        </div>
        <div class="shadow-lg p-3 m-4 bg-dark">
        <li class = "text-white">
            Gerenciar Raridade:
            <ul>
               
                  <a href="raridade_lista.php"><button class="btn btn-success"></button></a>
                
                <?php
                    $_SESSION['Codigo_Acesso'] = 'ativo';
                ?>
            </ul>
        </li class = "text-white"> 
        </div><br>
        <div class="shadow-lg p-3 m-4 alert bg-dark">
        <li class = "text-white">
            Cadastrar Campeão:
            <ul>
               
                  <a href="camp_cad.php"><button class="btn btn-info"></button></a>
                
                <?php
                    $_SESSION['Codigo_Acesso'] = 'ativo';
                ?>
            </ul>
        </li class = "text-white">
        </div>
        <div class="shadow-lg p-3 m-4 bg-dark">
        <li class = "text-white">
            Gerenciar Campeões:
            <ul>
               
                  <a href="camp_lista.php"><button class="btn btn-info"></button></a>
                
                <?php
                    $_SESSION['Codigo_Acesso'] = 'ativo';
                ?>
            </ul>
        </li class = "text-white">
        </div><br>
    <div class="shadow-lg p-3 m-4 bg-dark">
        <li class = "text-white">
            Cadastrar Skins:
            <ul>
               
                  <a href="skins_cad.php"><button class="btn btn-primary"></button></a>
                
                <?php
                    $_SESSION['Codigo_Acesso'] = 'ativo';
                ?>
            </ul>
        </li>
        </div>
        <div class="shadow-lg p-3 m-4 bg-dark">
        <li class = "text-white">
            Gerenciar Loja:
            <ul>
                
                <a href="skins_lista.php"><button class ="btn btn-primary"></button></a>
    
            <?php
                $_SESSION ['verifica'] = 'ativo';
                die();
            ?>
            </ul>
            
        </li>
        </div>
        </div>
   
    
</body>
</html>