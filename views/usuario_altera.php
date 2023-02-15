<?php
    include("../bd/conexao.php");
    include("../controls/usuario.php");
    $id=$_GET["id"];
    $usuario=buscar_usuario($conexao, $id);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar usuario</title>
</head>
<body>
    <h1>Alterar usuario</h1>
    <form action="" method="POST">

        <label name="lbl_id">Id</label>
        <input type="number" name="id"
        value="<?=$usuario['idtbl_usuario']?>"
        readonly>

        <br>

        <label name="lbl_idAdmFk">IdAdmFk</label>
        <input type="number" name="idAdmFk"
        value="<?=$usuario['Tbl_Adm_idTbl_Adm']?>"
        readonly>

        <br>

        <label name="lbl_idCliFk">IdAdmFk</label>
        <input type="number" name="idCliFk"
        value="<?=$usuario['tbl_cliente_idtbl_cliente']?>"
        readonly>

        <br>

        <label name="lbl_nome">Nome</label>
        <input type="text" name="nome" value="<?=$usuario['nome']?>"
        readonly>
<br>
        <label name="lbl_sobrenome">Sobrenome</label>
        <input type="text" name="sobrenome" value="<?=$usuario['Sobrenome']?>"
        readonly>
<br>
        <label name="lbl_email">Email</label>
        <input type="text" name="email" value="<?=$usuario['Email']?>"
        readonly>
<br>
        <label name="lbl_senha">Senha</label>
        <input type="text" name="senha" value="<?=$usuario['Senha']?>"
        readonly>
<br>
        <label name="lbl_tel">Telefone</label>
        <input type="text" name="tel" value="<?=$usuario['Telefone']?>"
        readonly>
<br>

        <input type="submit" value="Alterar">
    </form>
    <?php
        if($_POST)
        {
            $id=$_POST['id'];
             //$fk_Adm=$_GET[$id] or//
             $fk_Adm='null';
             //$fk_cliente=$_GET[] or//
             $fk_cliente='null';
             $nome=$_POST['nome'];
             $sobrenome=$_POST['sobrenome'];
             $email=$_POST['email'];
             $senha=$_POST['senha'];
             $telefone=$_POST['tel'];
            if(alterar_usuario($conexao,$fk_Adm,$fk_cliente,$nome,$sobrenome,$email,$senha,$telefone,$id))
            {
                echo("Alterado com sucesso");
                header("location: usuario_lista.php");
            }
            else
            {
                $msg=mysqli_error($conexao);
                echo($msg);
            }
        }
    ?>
</body>
</html>