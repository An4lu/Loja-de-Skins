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
    <title>Alterar Skin</title>
    <script>
        function loadFile(event){
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
</head>
<body>
<body style = "background: #1b1f27">
<div class="container">
<div class = "jumbotron bg-dark">
 <h1 class = "text-center bg-dark text-white">AlterarSkin</h1>
</div>
<div class="shadow-sm m-3 p-4 bg-dark">
   
    <form action="" method="post">
    <center>
        
            <h3 class= "text-white">Atual</h3>
            <label for=""><img src="../public/img/<?=$skin ['img']?>" alt="" height="380" width="380"></label> 
            <h3 class= "text-white">Nova</h3>
            <div class="preview-img">
            <img id="output" height="380" width="380"/>

        </div>
        </center>
        <label for="lbl_id" class="text-white">Código</label>
        <input type="number" name="id" class ="form-select bg-dark text-white" aria-label="Default select example" value="<?=$skin['id_skin']?>" readonly><br>
        
        <label for="lbl_campeao" class="text-white">Campeão: <b><?=$skin['nome_camp']?></b></label>
        <select name="campeao" class ="form-select bg-dark text-white" aria-label="Default select example" id="">
        <option value="">Selecione</option>
            <?php
            include ("../controls/camp.php");
            $campeoes = listar_camp($conexao);
            foreach ($campeoes as $c):
                echo "<option value=".$c['id_camp'].">".$c['Nome']."</options>";
            endforeach;
            ?>
        </select>
        <br>
        <label for="lbl_raridade" class = "text-white">Raridade: <b><?= $skin['raridade']?></b></label>
        <select name="raridade" class ="form-select bg-dark text-white" aria-label="Default select example" id="">
            <option value="">Selecione</option>
            <?php
                include("../controls/raridade.php");
                $raridades = listar_raridade($conexao);
                foreach($raridades as $r):
                    echo "<option value=".$r['id_raridade'].">".$r['Raridade']."</option>";
                endforeach;
            ?>
        </select>
        <br>
        <label for="Nome" class="text-white">Nome</label>
        <input type="text" name="nome" id="formGroupExampleInput" class = "form-control bg-dark text-white" value="<?= $skin ['nome']?>"><br>

        <label for="preco" class="text-white">Preço</label>
        <input type="text" name="preco" id="formGroupExampleInput" class = "form-control bg-dark text-white" value="<?= $skin ['preco']?>"><br>

        <label for="arquivo" class="bot text-white">Procurar Imagem</label>
        <input type="file" id="arquivo"  onchange="loadFile(event)" id="formGroupExampleInput" class = "form-control bg-dark text-white" name="img"><br>

        <label for="detalhe" class="text-white">Detalhe</label>
        <input type="text" name="detalhe"  id="formGroupExampleInput" class = "form-control bg-dark text-white" value="<?= $skin ['detalhe']?>"><br>



                
        <input type="submit" value="Alterar">
        </div>
    </form>
    <?php
         if ($_POST)
         {
            $id = $_POST['id'];
             $campeao = $_POST['campeao'];
             $raridade = $_POST['raridade'];
             $nome = $_POST ['nome'];
             $preco = $_POST['preco'];
             $img = $_POST['img'];
             $detalhe = $_POST['detalhe'];
         if(alterar_skin($conexao, $campeao, $raridade, $nome, $preco, $img, $detalhe, $id))
         {
            echo ("Alterado com sucesso");
            header("Location: skins_lista.php");
            } 
            else {
            $msg = mysqli_error($conexao);
            echo ("<div class = 'alert alert-danger' role ='alert'> Falha ao Registrar. ".$msg."</div>");
            }
         }
            
            ?>
            </div>
</body>
</html>