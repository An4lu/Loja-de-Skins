<?php
    include("../bd/conexao.php");
    include("../controls/camp.php");
    $id=$_GET['id'];
    if(excluir_camp($conexao,$id))
    {
        header("Location: ../views/camp_lista.php");
        die();
    }
?>