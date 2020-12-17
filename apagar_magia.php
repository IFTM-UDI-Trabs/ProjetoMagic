<?php
    include ("funcoes.php");

    $nome = $_REQUEST['nome'];

    $conetca = conecta();

    $texto_sql = "DELETE FROM magia WHERE nome = '$nome'";
    $result = mysqli_query($conetca, $texto_sql);
    trocaPagina("pag_princi.php");
?>