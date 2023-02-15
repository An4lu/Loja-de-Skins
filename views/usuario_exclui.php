<?php
    include("../bd/conexao.php");
    include("../controls/usuario.php");
    $id=$_GET['id'];
    if(excluir_usuario($conexao,$id))
    {
        header("Location: usuario_listar.php");
        die();
    }
?>