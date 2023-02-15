<?php
    include("../bd/conexao.php");
    include("../controls/raridade.php");
    $id=$_GET['id'];
    if(excluir_raridade($conexao,$id))
    {
        header("Location: raridade_lista.php");
        die();
    }
?>