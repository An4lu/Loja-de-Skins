<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
    <title>Cadastro Raridade</title>
</head>

<body style = "background: #1b1f27">
<div class="container">
<div class = "jumbotron bg-dark">
 <h1 class = "text-center bg-dark text-white">Cadastro Raridade</h1>
</div>
    <form action="" method="post">
    <div class="shadow-sm m-3 p-4 bg-dark">
        <br>

        <label name="lbl_nomeRaridade"  class="text-white">Digite a nova raridade: </label>
        <input type="text" name="raridade" id="formGroupExampleInput" class = "form-control bg-dark text-white" ><br>
        <input type="submit" value="Cadastrar" class = "btn btn-secondary">
    </div>
    </form>

    <?php
    include("../bd/conexao.php");
    include("../controls/raridade.php");

    if ($_POST) {
        $raridade = $_POST['raridade'];

        if (inserir_raridade($conexao, $raridade)) {
            echo ("<div class = 'alert alert-secondary' role = 'alert'>Cadastrado com sucesso</div>");
        } else {
            $msg = mysqli_error($conexao);
            echo ("<div class = 'alert alert-danger' role ='alert'> Falha ao Registrar. ".$msg."</div>");
        }
    }


    ?>
        <button class = 'btn btn-dark'><a href = '../views/adm_menu.php' style = 'color: white'><--</a></button>
   <button class = 'btn btn-dark '><a href = '../views/raridade_lista.php' style = 'color: white'>Visualizar</a></button><br><br>
</div>
</body>

</html>