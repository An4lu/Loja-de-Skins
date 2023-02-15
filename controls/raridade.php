<?php
//inserir
function inserir_raridade($conexao,$raridade)
{
    $sql="insert into tbl_raridade values(default,'$raridade')";
    return mysqli_query($conexao, $sql);
}

//alterar
function alterar_raridade($conexao,$raridade,$id_raridade)
{
    $sql="update tbl_raridade set raridade='$raridade' where id_raridade=$id_raridade  ";
    return mysqli_query($conexao, $sql);
}

//excluir
function excluir_raridade($conexao, $id_raridade){
    $sql="delete from tbl_raridade where id_raridade= $id_raridade";
    return mysqli_query($conexao,$sql);
    }

//listar
function listar_raridade($conexao){
    $raridades = array();
    $resultado = mysqli_query($conexao, "select * from tbl_raridade");
    while ($raridade = mysqli_fetch_assoc($resultado)) {
    array_push ($raridades, $raridade);
    }
    return $raridades;
    }
    
//buscar
function buscar_raridade($conexao, $id_raridade){
    $resultado = mysqli_query($conexao, "select * from tbl_raridade where 
    id_raridade=$id_raridade");
    return mysqli_fetch_assoc($resultado);
    }
    
?>