<?php
//inserir
function inserir_usuario($conexao,$nome,$sobrenome,$email,$senha,$telefone)
{
    $sql="insert into tbl_usuario values(default,'$nome','$sobrenome','$email','$senha',$telefone)";
    return mysqli_query($conexao, $sql);
}

//alterar
function alterar_usuario($conexao,$nome,$sobrenome,$email,$senha,$telefone,$id_Usuario)
{
    $sql="update tbl_usuario set nome='$nome',Sobrenome='$sobrenome',Email='$email',Senha='$senha',Telefone='$telefone' where idtbl_Usuario=$id_Usuario";
    return mysqli_query($conexao, $sql);
}

//excluir
function excluir_usuario($conexao, $id_Usuario){
    $sql="delete from tbl_Usuario where idtbl_Usuario= $id_Usuario";
    return mysqli_query($conexao,$sql);
    }

//listar
function listar_usuario($conexao){
    $usuarios = array();
    $resultado = mysqli_query($conexao, "select * from tbl_Usuario");
    while ($usuario = mysqli_fetch_assoc($resultado)) {
    array_push ($usuarios, $usuario);
    }
    return $usuarios;
    }
    
//buscar
function buscar_usuario($conexao, $id_usuario){
    $resultado = mysqli_query($conexao, "select * from tbl_usuario where 
    idtbl_usuario=$id_usuario");
    return mysqli_fetch_assoc($resultado);
    }
 
    function efetuarLoginUser($conexao, $email, $senha)
    {
        $sql = "select*from tbl_usuario where email = '{$email}'"." and senha = '{$senha}'";
        $resultado = mysqli_query ($conexao, $sql);
        return mysqli_fetch_assoc($resultado);
    }

?>