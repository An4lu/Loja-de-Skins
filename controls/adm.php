<?php
//inserir
function inserir_adm($conexao,$Nome_Registro,$Codigo_Acesso)
{
    $sql="insert into Tbl_Adm values(default,'$Nome_Registro',$Codigo_Acesso)";
    return mysqli_query($conexao, $sql);
}

//alterar
function alterar_adm($conexao,$Nome_Registro,$Codigo_Acesso,$id_Adm)
{
    $sql="update Tbl_Adm set Nome_Registro='$Nome_Registro',Codigo_Acesso='$Codigo_Acesso' where idTbl_Adm=$id_Adm  ";
    return mysqli_query($conexao, $sql);
}

//excluir
function excluir_adm($conexao, $idTbl_Adm){
    $sql="delete from Tbl_Adm where idTbl_Adm= $idTbl_Adm";
    return mysqli_query($conexao,$sql);
    }

//listar
function listar_adm($conexao){
    $adms = array();
    $resultado = mysqli_query($conexao, "select * from Tbl_Adm");
    while ($adm = mysqli_fetch_assoc($resultado)) {
    array_push ($adms, $adm);
    }
    return $adms;
    }
    
//buscar
function buscar_adm($conexao, $id_Adm){
    $resultado = mysqli_query($conexao, "select * from Tbl_Adm where 
    idTbl_Adm=$id_Adm");
    return mysqli_fetch_assoc($resultado);
    }
    
    function efetuarLoginADM($conexao, $Nome_Registro, $Codigo_Acesso)
    {
        $sql = "select*from tbl_adm where Nome_Registro = '{$Nome_Registro}'"." and Codigo_Acesso = '{$Codigo_Acesso}'";
        $resultado = mysqli_query ($conexao, $sql);
        return mysqli_fetch_assoc($resultado);
    }

?>