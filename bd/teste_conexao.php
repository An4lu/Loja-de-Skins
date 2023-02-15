<?php
    include ("conexao.php");
    if(!$conexao){
        echo("Não foi possivel conectar ao banco de dados");
        exit;
    }else{
        echo("Conexão criada com sucesso");
    }


?>