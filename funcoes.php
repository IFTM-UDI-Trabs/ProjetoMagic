<?php

    function conecta()
    {
        $servidor = "localhost";
        $bd = "3c2020_msr_dsp";
        $usuario = "root";
        $senha = "";

        $conexao = @mysqli_connect($servidor,$usuario,$senha,$bd);

        if ($conexao)
        {
            return $conexao;
        }

        else
        {
            return false;
        }
    }

    function mensagem($mensagem){
        echo "<script type=\"text/javascript\" language=\"javascript\">";
        echo "alert(\"$mensagem\");";
        echo "</script>";
    }

    function trocaPagina($pagina){
        echo "<script type=\"text/javascript\" language=\"javascript\">";
        echo "window.location.href = '$pagina'";
        echo "</script>";
    }
?>