<?php
    include("../bd/conexao.php");
    include ("../controls/skin.php");
    $id = $_GET['id'];
    $skin = buscar_skin($conexao, $id)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
    <title>Tela de Compra</title>
</head>
<body>
<body style = "background: #1b1f27">
<div class="container">
<div class = "jumbotron bg-dark">
<a href="../views/index.php"><img src="../public/img/logo1.png"></a></img>
 <h1 class = "text-center bg-dark text-white"><?= $skin ['nome']?></h1>
</div>
<div class="shadow-sm m-3 p-4 bg-dark">
   
    <center>
        
            <label for=""><img src="../public/img/<?=$skin ['img']?>" alt="" height="380" width="380"> 

        </div>
        </center>
        <h4> <label  for="lbl_campeao" class="text-white">Campeão: <b><?=$skin['nome_camp']?></b></label><br>
        <label for="lbl_raridade" class = "text-white">Raridade: <b><?= $skin['raridade']?></b>
        <br>

        <label for="preco" class="text-white">Preço: <?= $skin ['preco']?><br>

        <label for="detalhe" class="text-white"><?= $skin ['detalhe']?></label>
                
        
        </div>
        <center><a href="../views/index.php" style="color:aliceblue"><input type="submit" value="Comprar" class="btn btn-success"></a></center>
            </div>
</body>
</html>