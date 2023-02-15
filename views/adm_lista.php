<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
      <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
      <link rel="stylesheet" href="../public/css/stylelista.css">
    <title>Document</title>
</head>
<body style = "background-image: url(../public/img/backloll.png)">
<div class="container">

<div class = "jumbotron bg-dark">
<h1 class = "text-center bg-dark text-white">Identificacao administrativa</h1>
</div>

    <table border="1" class="table table-dark ">
        <tr>
            <td><b>Id</td>
            <td><b>Nome de Registro</td>
            <td><b>Código de Acesso</b></td>
            <td><b>Alterar</td>
            <td><b>Excluir</td>
        </tr>
        <?php
            include("../bd/conexao.php");
            include("../controls/adm.php");
            $adms=listar_adm($conexao);
            foreach ($adms as $adm):
        ?>
            <tr>
                <td><?=$adm['idTbl_Adm'] ?></td>
                <td><?=$adm['Nome_Registro']?></td>
                <td><?=$adm['Codigo_Acesso']?></td>
                <td><a href="../views/adm_altera.php?id=<?=$adm['idTbl_Adm']?>">Alterar</a></td>
                <td><a href="../views/adm_exclui.php?id=<?=$adm['idTbl_Adm']?>">Excluir</a></td>

            </tr>
            <?php endforeach; ?>
             


    </table>
    <button class = "btn btn-dark"> <a href="adm_menu.php" style="color: white"><--</a></button>
</body>
</html>