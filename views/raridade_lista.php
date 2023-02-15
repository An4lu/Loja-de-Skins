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
 <h1 class = "text-center bg-dark text-white">Raridade</h1>
    </div>
    <table border="1" class="table table-dark">


        <tr>
            <td><b>Id</td>
            <td><b>Raridade</td>
            <td><b>Alterar</td>
            <td><b>Excluir</td>
        </tr>
        <?php
            include("../bd/conexao.php");
            include("../controls/raridade.php");
            $raridades=listar_raridade($conexao);
            foreach ($raridades as $raridade):
        ?>
            <tr>
                <td><?=$raridade['id_raridade'] ?></td>
                <td><?=$raridade['Raridade'] ?></td>


                <td><a href="raridade_altera.php?id=<?=$raridade['id_raridade']?>">Alterar</a></td>
                <td><a href="raridade_exclui.php?id=<?=$raridade['id_raridade']?>">Excluir</a></td>

            </tr>
            <?php endforeach; ?>
    </table>
    <button class = "btn btn-dark"> <a href="adm_menu.php" style="color: white"><--</a></button>
</body>
</html>