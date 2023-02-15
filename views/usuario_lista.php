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
<body style = "background-image: url(../public/img/backloll.png);">
<div class="container">

<div class = "jumbotron bg-dark">
<h1 class = "text-center bg-dark text-white">Identificacao Usuario</h1>
</div>


    <table border="1" class="table table-dark   ">
        <tr>
            <td><b>Id</td>
            <td><b>nome</td>
            <td><b>Sobrenome</td>
            <td><b>Email</td>
            <td><b>Senha</td>
            <td><b>Telefone </b></td>
            <td><b>Excluir</td>
        </tr>
        <?php
            include("../bd/conexao.php");
            include("../controls/usuario.php");
            $usuarios=listar_usuario($conexao);
            foreach ($usuarios as $usuario):
        ?>
            <tr>
                <td><?=$usuario['idtbl_Usuario'] ?></td>

                <td><?=$usuario['nome'] ?></td>
                <td><?=$usuario['Sobrenome'] ?></td>
                <td><?=$usuario['Email'] ?></td>
                <td><?=$usuario['Senha'] ?></td>
                <td><?=$usuario['Telefone'] ?></td>
                <td><a href="usuario_exclui.php?id=<?=$usuario['idtbl_Usuario']?>">Excluir</a></td>

            </tr>
            <?php endforeach; ?>



    </table>
    <button class = 'btn btn-dark'><a href = '../views/adm_menu.php' style = 'color: white'><--</a></button>
</body>
</html>
