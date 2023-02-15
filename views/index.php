<?php
include("../bd/conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>League of Lags</title>
    <link rel="preconnect" href="https://www.onlinewebfonts.com">
    <link href="//db.onlinewebfonts.com/c/12420e8c141ca7c3dff41de2d59df13e?family=BeaufortforLOL-Bold" rel="stylesheet" type="text/css"/>
    <script src="https://kit.fontawesome.com/1e592b5726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../public/css/pesquisa.css">
    <link rel="stylesheet" href="../public/css/stylemain.css">
    <link rel="stylesheet" href="../public/css/style.css">
</head>

<body style = "background: url('../public/img/backloll.jpg')">
    <header id="header">
        
    <a href="../views/index.php"><img src="../public/img/logo1.png"></a></img>
        
        <center>            
        <form id="search" method="POST">
            <div class="search-box">
                <input type="text" class="search-text"  name="pesq" placeholder="Pesquisar..."></input>

                    <img class="lupabrown" src="../public/img/lupan.png">
                </input>
            </div>
            
        </form>
        </center>


        <nav id="nav">
           
            
            <button aria-label="Abrir Menu" id="btn-mobile" aria-haspopup="true" aria-controls="menu" aria-expanded="false">
                <span id="omg"></span>
            </button>
           
            <ul id="menu">
                <li><a href="../controls/logout.php"><img src="../public/img/sair.png"></a></li>
            </ul>
            
        </nav>
    </header>

    <div class="box">
      <div class="wrapper">
        
    <?php
        include("../bd/conexao.php");
        include("../controls/skin.php");
        if($_POST)
        {
        $skin=$_POST['pesq'];
        $skins = pesquisar_skin($conexao, $skin);
    }
  else
  {

    $skins = listar_skin($conexao);
}
    
        foreach ($skins as $skin) :
        

        ?>
   
            <section class="cards">
                <div class="card">
                    <div class="imgBx">
                    <img id="fotu" src="../public/img/<?=$skin['img']?>">
                    </div>
                    <div class="contentBx">
                        <h3 class="skin"><small> <?=$skin['nome']?></small></h3>
                        <h3 class="Raridade"><?=$skin['raridade']?></h3>
                        <h2 class="price"><img id="logo" src="../public/img/rp.png"> <?=$skin['preco']?></h2>
                        <a href="../views/compra.php?id=<?= $skin['id_skin'] ?>" class="buy">Compre agora </a>
                </div>      
                </div>
            </section>
    <?php endforeach; ?>
        </div>    
    </div>

 
    <script src="./script.js"></script>
</body>

</html>