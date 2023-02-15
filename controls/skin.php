<?php
    //inserir
    function inserir_skin ($conexao, $idcamp_FK, $idraridade_FK, $nome, $preco, $img, $detalhe)
    {
        $sql = "insert into tbl_skin values (default, $idcamp_FK, $idraridade_FK, '$nome', $preco, '$img', '$detalhe')";
        return mysqli_query($conexao, $sql);
    }
    //alterar
    function alterar_skin ($conexao, $idcamp_FK, $idraridade_FK, $nome, $preco, $img, $detalhe, $id_skin)
    {
        $sql = "update tbl_skin set 
        idcamp_FK = $idcamp_FK,
        idraridade_FK = $idraridade_FK,
        nome = '$nome',
        preco = $preco,
        img = '$img',
        detalhe = '$detalhe' where id_skin = $id_skin";
        return mysqli_query($conexao, $sql);
    }
    //excluir
    function excluir_skin ($conexao, $id_skin)
    {
        $sql = "delete from tbl_skin where id_skin = $id_skin";
        return mysqli_query($conexao, $sql);
    }
    //listar
    function listar_skin ($conexao)
    {
        $skins = array();
        $resultado = mysqli_query($conexao, "select*from view_skin");
        while ($skin = mysqli_fetch_assoc($resultado)){
            array_push($skins, $skin);
        }
        return $skins;
    }
    function buscar_skin ($conexao, $id_skin)
    {
        $resultado = mysqli_query($conexao, "select*from view_skin where id_skin = $id_skin");
        return mysqli_fetch_assoc($resultado);
    }
    function pesquisar_skin($conexao, $skin){
        $skins = array();
        $resul = mysqli_query($conexao, "select * from view_skin where Nome like '%$skin%' ");
        while($skin = mysqli_fetch_assoc($resul)) {
            array_push ($skins, $skin);
        }
        return $skins;
        }
