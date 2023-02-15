<?php
include("../bd/conexao.php");
include("../controls/camp.php");
$id = $_GET["id"];
$camp = buscar_camp($conexao, $id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar campeão </title>
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
</head>

<body style = "background: #1b1f27">
<div class="container">
    <div class = "jumbotron bg-dark">
    <h1 class = "text-center bg-dark text-white">Alterar Campeão</h1>
    </div>
    <form action="" method="POST">
        <div class="shadow-lg p-3 m-3 bg-dark">
        <label name="lbl_id" class="text-white">Id:    </label>
        <input type="number" name="id" class="form-control bg-dark text-white" value="<?= $camp['id_camp'] ?>" readonly>

        <br><br>

        <label name="lbl_nomecamp" class="text-white" for="exampleFormControlTextarea1">Altere o nome do campeão: </label>
        <input type="text" name="nome" class="form-control bg-dark text-white "   value="<?= $camp['Nome'] ?>">
        <br><br>

        <label name="lbl_funccamp" for="exampleFormControlTextarea1" class= "text-white">Altere a função do campeão: </label>
        <input type="text" name="func" class="form-control bg-dark text-white" value="<?= $camp['Funcao'] ?>" >
        <br><br>

        <label name="lbl_lanecamp" for="exampleFormControlTextarea1" class="text-white">Altere a lane do campeão: </label>
        <input type="text" name="lane"  class="form-control bg-dark text-white" value="<?= $camp['Lane'] ?>">
        <br><br>
     

        <input type="submit" value="Alterar" class="btn btn-secondary">
        </div>
    </form>
    <button class = 'btn btn-dark'><a href = '../views/raridade_lista.php' style = 'color: white'><--</a></button>
    <?php
    if ($_POST) {
        $nome = $_POST['nome'];
        $funcao = $_POST['func'];
        $Lane = $_POST['lane'];

        if (alterar_camp($conexao,$nome,$funcao,$Lane,$id)) {
            echo ("Alterado com sucesso");
            header("location: camp_lista.php");
        } else {
            $msg = mysqli_error($conexao);
            echo ("<div class = 'alert alert-danger' role ='alert'> Falha ao Registrar. ".$msg."</div>");
        }
    }
    ?>
    
    </div>

</body>

</html>