<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">

    <title>Cadastrar Adm</title>
</head>
<body style = "background: #1b1f27">
<div class="container">
<div class = "jumbotron bg-dark">
 <h1 class = "text-center text-white">Cadastro de Adm</h1>
</div>
    <h1 class = "text-white">Cadastre-se</h1>
    <div class="shadow-lg m-3 p-4 bg-dark">
    <form action="" method="post">
        <label name="lbl_idenFunc" class="text-white">Nome de Registro</label>
        <input type="text" name="nomeReg" id="formGroupExampleInput" class = "form-control  bg-dark text-white">
<br>
        <label name="lbl_nvGer"  class="text-white">Código de Acesso</label>
        <input type="text" name="cod_ac"id="formGroupExampleInput" class = "form-control  bg-dark text-white"><br>
        <input type="submit" class = "btn btn-secondary" value="Cadastrar">
<br>
</div>
       

    </form>
    <button class = 'btn btn-dark'><a href = '../views/adm_menu.php' style = 'color: white'><--</a></button>
   <button class = 'btn btn-dark '><a href = '../views/adm_lista.php' style = 'color: white'>Visualizar</a></button><br><br>
<?php
        include("../bd/conexao.php"); 
        include("../controls/adm.php");

        if($_POST)
        {
            
            $Nome_Registro=$_POST['nomeReg'];
            $Codigo_Acesso=$_POST['cod_ac'];
              if(inserir_adm($conexao,$Nome_Registro,$Codigo_Acesso))
                {
                    echo(" <div class = 'alert alert-secondary' role = 'alert'>Cadastrado com sucesso</div>");
                    
                }
                else
                {
                    $msg=mysqli_error($conexao);
                    echo("<div class = 'alert alert-danger' role ='alert'> Falha ao Registrar. ".$msg."</div>");
                }

            
        }


?>
</div>  
</body>
</html>