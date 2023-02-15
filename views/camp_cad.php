<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
    <title>Cadastro Cliente</title>
</head>

<body style = "background: #1b1f27">    
    <div class="container">
    <div class = "jumbotron bg-dark">
 <h1 class = "text-center bg-dark text-white">Cadastro de Campeão</h1>
</div>
<div class="shadow-lg m-3 p-4 bg-dark">
    <form action="" method="POST">
    <label for="lbl_camp" class="text-white">Nome Campeão</label>
        <input type="text" name="nome"  id="formGroupExampleInput" class = "form-control bg-dark text-white" ><br>
        <label for="lbl_func" class="text-white">Função</label>
        <input type="text" name="func"  id="formGroupExampleInput" class = "form-control bg-dark text-white" ><br>
        <label for="lbl_lane" class="text-white">Lane</label>
        <input type="text" name="lane"  id="formGroupExampleInput" class = "form-control bg-dark text-white" ><br>
        <input type="submit" value="Cadastrar" class="btn btn-secondary">

    </form>

</div>


    <?php
    include("../bd/conexao.php");
    include("../controls/camp.php");

    if ($_POST) {
        $nome = $_POST['nome'];
        $funcao = $_POST['func'];
        $Lane = $_POST['lane'];

        if (inserir_camp($conexao,$nome,$funcao,$Lane)) {
            echo ("<div class = 'alert alert-secondary' role = 'alert'>Cadastrado com sucesso</div>");
        } else {
            $msg = mysqli_error($conexao);
            echo ("<div class = 'alert alert-danger' role ='alert'> Falha ao Registrar. ".$msg."</div>");
        }
    }


    ?>
     <button class = 'btn btn-dark'><a href = '../views/adm_menu.php' style = 'color: white'><--</a></button>
   <button class = 'btn btn-dark '><a href = '../views/camp_lista.php' style = 'color: white'>Visualizar</a></button><br><br>
</div>
</body>

</html>