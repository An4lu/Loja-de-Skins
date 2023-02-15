<?php
//inserir
function inserir_camp($conexao,$nome,$funcao,$lane)
{
    $sql="insert into tbl_camp values(default,'$nome','$funcao','$lane')";
    return mysqli_query($conexao, $sql);
}

//alterar
function alterar_camp($conexao,$nome,$funcao,$lane,$id_camp)
{
    $sql="update tbl_camp set Nome='$nome',Funcao='$funcao',Lane='$lane' where id_camp=$id_camp  ";
    return mysqli_query($conexao, $sql);
}

//excluir
function excluir_camp($conexao, $id_camp){
    $sql="delete from tbl_camp where id_camp= $id_camp";
    return mysqli_query($conexao,$sql);
    }

//listar
function listar_camp($conexao){
    $camps = array();
    $resultado = mysqli_query($conexao, "select * from tbl_camp");
    while ($camp = mysqli_fetch_assoc($resultado)) {
    array_push ($camps, $camp);
    }
    return $camps;
    }
    
//buscar
function buscar_camp($conexao, $id_camp){
    $resultado = mysqli_query($conexao, "select * from tbl_camp where 
    id_camp=$id_camp");
    return mysqli_fetch_assoc($resultado);
    }
    
?>