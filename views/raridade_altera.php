<?php
include("../bd/conexao.php");
include("../controls/raridade.php");
$id = $_GET["id"];
$raridade = buscar_raridade($conexao, $id);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
    <title>Alterar Raridade </title>
</head>

<body style = "background: #1b1f27">
<div class="container">
    <div class = "jumbotron bg-dark">
    <h1 class = "text-center bg-dark text-white">ALterar Raridade</h1>
    </div>
    <form action="" method="POST">
        <div class="shadow-lg p-3 m-3 bd-dark">
        <label name="lbl_id"  class="text-white">Id</label>
        <input type="number" name="id"  class ="form-select bg-dark text-white" aria-label="Default select example" value="<?= $raridade['id_raridade'] ?>" readonly>

        <br>

        <label name="lbl_TipoRaridade"  class="text-white">Tipo da raridade</label>
        <input type="text" name="raridade" class ="form-select bg-dark text-white" aria-label="Default select example" value="<?= $raridade['Raridade'] ?>" >

        <br>


        
        <input type="submit" value="Alterar" class = "btn btn-secondary">
    </form>
    </div>
    <?php
    if ($_POST) {
        $id = $_POST['id'];
        $raridade = $_POST['raridade'];

        if (alterar_raridade($conexao, $raridade, $id)) {
            echo ("Alterado com sucesso");
            header("location: raridade_lista.php");
        } else {
            $msg = mysqli_error($conexao);
            echo ("<div class = 'alert alert-danger' role ='alert'> Falha ao Registrar. ".$msg."</div>");
        }
    }
    ?>
    <button class = 'btn btn-dark'><a href = '../views/raridade_lista.php' style = 'color: white'><--</a></button>
    </div>
</body>

</html>