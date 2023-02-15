<?php
    session_start();
    session_destroy();
    header ("Location: ../views/usuario_pag_login.php");
?>