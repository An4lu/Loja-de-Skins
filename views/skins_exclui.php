<?php
include("../bd/conexao.php");
include("../controls/skin.php"); 
$id=$_GET['id'];
if(excluir_skin($conexao,$id))
{
header("Location: skins_lista.php");
die();
} 
?>