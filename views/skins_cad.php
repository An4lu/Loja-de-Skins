<?php
    include ("../bd/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../public/css/bootstrap/css/bootstrap.css">
    <title>Cadastro de Skins</title>
    <script>
        function loadFile(event){
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
    };
    </script>
</head>
<body style = "background: #1b1f27">
<div class="container">
<div class = "jumbotron bg-dark">
 <h1 class = "text-center bg-dark text-white">Cadastro de Skin</h1>
</div>
<div class="shadow-lg m-3 p-4 bg-dark">
        <center>
        <div class="preview-img">
            <img id="output" height="380" width="380" />
        </div>
        </center>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="lbl_camp" class="text-white">Campeão</label>
        <select name="camp" class="form-select bg-dark text-white" aria-label="Default select example">
            <option value="">Selecione</option>
            <?php
                include("../controls/camp.php");
                $camp = listar_camp($conexao);
                foreach ($camp as $c):
                    echo "<option value = ".$c['id_camp'].">".$c['Nome']."</option>";
                endforeach;
            ?>
        </select>
        <br>
        <label for="lbl_raridade" class="text-white">Raridade</label>
        <select name="raridade" class="form-select bg-dark text-white" aria-label="Default select example">
            <option value="">Selecione</option>
            <?php
                include("../controls/raridade.php");
                $raridades = listar_raridade($conexao);
                foreach ($raridades as $r) :
                    echo "<option value=".$r['id_raridade'].">".$r['Raridade']."</option>";
                endforeach;
            ?>
        </select><br>
        <label for="nome" class="text-white">Nome da Skin</label>
        <input type="text" name="nome" id="formGroupExampleInput" class = "form-control bg-dark text-white"><br>

        <label for="preco" class="text-white">Preço</label>
        <input type="number" name="preco" id="formGroupExampleInput" class = "form-control bg-dark text-white"><br>

        <label for="detalhe" class="text-white">Detalhe</label>
        <input type="text" name="detalhe" id="formGroupExampleInput" class = "form-control bg-dark text-white"><br>
        <label for="arquivo" class="bot text-white">Procurar Imagem</label>
        <input type="file"  id="arquivo" name="txtimg[]" onchange="loadFile(event)" class="form-control bg-dark text-white"><br>
        </div>
       
        <input type="submit" value="Cadastrar" class="btn btn-secondary">
    
     

    
    </form><br><br>
           
  
    <?php
        include("../controls/skin.php");
        if ($_POST)
        {
            $campeao = $_POST['camp'];
            $raridade = $_POST['raridade'];
            $nome = $_POST ['nome'];
            $preco = $_POST['preco'];
            foreach ($_FILES["txtimg"]["error"] as $key => $valor) {
                if ($valor == UPLOAD_ERR_OK) {
                $temp = $_FILES['txtimg']['tmp_name'][$key];
                $img = $_FILES['txtimg']['name'][$key];
                move_uploaded_file($temp, "../public/img/$img");
                echo ("nome: $img <br>");
                }
                }
                
            $detalhe = $_POST['detalhe'];
            if (inserir_skin($conexao, $campeao, $raridade, $nome, $preco, $img, $detalhe))
            {
                echo ("<div class = 'alert alert-secondary' role = 'alert'>Cadastrado com sucesso</div>");
            }
            else
            {
                $msg = mysqli_error($conexao);
                echo ("<div class = 'alert alert-danger' role ='alert'> Falha ao Registrar. ".$msg."</div>");
            }
        }
    ?>
     <button class = 'btn btn-dark'><a href = '../views/adm_menu.php' style = 'color: white'><--</a></button>
   <button class = 'btn btn-dark '><a href = '../views/skins_lista.php' style = 'color: white'>Visualizar</a></button>
      </div>
</body>
</html>