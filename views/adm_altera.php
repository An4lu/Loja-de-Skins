<?php
    include("../bd/conexao.php");
    include("../controls/adm.php");
    $id=$_GET["id"];
    $adm=buscar_adm($conexao, $id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
    <title>Alterar Adm</title>
</head>
<body style = "background: #1b1f27">
<div class="container">
<div class = "jumbotron bg-dark">
 <h1 class = "text-center bg-dark text-white">Cadastro de Skin</h1>
</div>
<div class="shadow-lg m-3 p-4 bg-dark">
     <form method="POST">
        <label name="lbl_id" class="text-white">Id</label>
        <input type="number" name="id" id="formGroupExampleInput" class = "form-control bg-dark text-white"
        value="<?=$adm['idTbl_Adm']?>"
        >

        <br>

        <label name="lbl_nomeReg" class="text-white">Nome de Registro</label>
        <input type="text" name="NomeReg" id="formGroupExampleInput" class = "form-control bg-dark text-white"
        value="<?=$adm['Nome_Registro']?>"
        >

        <br>

        <label name="lbl_Cod" class="text-white">Código de Acesso</label>
        <input type="text" name="Cod_ac" id="formGroupExampleInput" class = "form-control bg-dark text-white"
        value="<?=$adm['Codigo_Acesso']?>"
        >

        <br>

        <input type="submit" value="Alterar" class="btn btn-secondary">

    </form>
    </div>
    <?php
        if($_POST)
        {
            $id=$_POST['id'];
            $Nome_Registro=$_POST['NomeReg'];
            $Codigo_Acesso=$_POST['Cod_ac'];
            if(alterar_adm($conexao,$Nome_Registro,$Codigo_Acesso,$id))
            {
                echo("Alterado com sucesso");
                header("location: adm_lista.php");
            }
            else
            {
                $msg=mysqli_error($conexao);
                echo($msg);
            }
        }
    ?>
          <button class = 'btn btn-dark'><a href = '../views/raridade_lista.php' style = 'color: white'><--</a></button>
    </div>
</body>
</html>