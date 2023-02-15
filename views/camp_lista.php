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
 <h1 class = "text-center bg-dark text-white">Campeões</h1>
    </div>
    <table border="1" class="table table-dark   ">
        <tr>
            <td><b>Id</td>
            <td><b>Nome</td>
            <td><b>Função</td>
            <td><b>Lane</td>
            <td><b>Alterar</td>
            <td><b>Excluir</b></td>
        </tr>
        <?php
        include("../bd/conexao.php");
        include("../controls/camp.php");
        $camps = listar_camp($conexao);
        foreach ($camps as $camp) :
        ?>
            <tr>
                <td><?= $camp['id_camp'] ?></td>
                <td><?= $camp['Nome'] ?></td>
                <td><?= $camp['Funcao'] ?></td>
                <td><?= $camp['Lane'] ?></td>

                <td><a href="camp_altera.php?id=<?= $camp['id_camp'] ?>">Alterar</a></td>
                <td><a href="camp_exclui.php?id=<?= $camp['id_camp'] ?>">Excluir</a></td>

            </tr>
        <?php endforeach; ?>



    </table>
   <button class="btn btn-dark"> <a href="adm_menu.php" style="color: white" ><-- </a></button>
</body>

</html>