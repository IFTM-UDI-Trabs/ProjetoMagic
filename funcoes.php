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
?>