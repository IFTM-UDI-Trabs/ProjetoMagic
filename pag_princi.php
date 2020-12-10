<?php
    include ("funcoes.php");

    session_start();
    $nome = $_SESSION['nome'];
    $_SESSION['nome'] = $nome;

    $op = @ $_REQUEST['op'];

    if (isset($op)){} else {
        $op = 0;
    }
?>
<html>
    <head>
        <title>Projeto Magic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/pag_princi.css">
    </head>
    <body>
        <div class="menuLateral">

            <div class="perfil">
                <?php
                    if ($op == 0){
                        ?>
                            <img class="img" src="img/vetorum.png">
                        <?php
                    } else if ($op == 1){
                        ?>
                            <img class="img" src="img/vetordois.png">
                        <?php
                    } else {
                        ?>
                            <img class="imgmago" src="img/vetortres.png">
                        <?php
                    }
                ?>
                <h2 class="bv">Bem Vindo <?php echo"$nome"?></h2>
            </div>
            <div class="opcoes">
                <ul class="lista">
                    <li class="titulo">MENU</li>
                    <li><a href="?op=0">Magias Universais</a></li>
                    <li><a href="?op=1">Magias Preferidas</a></li>
                    <li><a href="?op=2">Minhas Magias</a></li>
                    <li><a onclick="sair()">Sair</a></li>
                </ul>
            </div>
        </div>
    <?php
        if ($op == 0){
            ?>

            <div class="pag">
                <div class="magias">
            <?php

            $conetca = conecta();

            $texto_sql = @ "SELECT * FROM magia WHERE user='$nome'";
            $resultado = @ mysqli_query($conetca, $texto_sql);
            $selecao = mysqli_num_rows($resultado);

            $q = 0;
            $s = 0;

            while ($linha = mysqli_fetch_array($resultado)){
                    if ($q == 0){
                        echo "<div class='linha'>";
                    }
                    $id = $linha['id'];
                    $nome_magia = $linha['nome'];
                    $escola_magia = $linha['escola'];
                    $nivel_magia = $linha['nivel'];
                    $conjurador_magia = $linha['conjurador'];
                    $tempo_magia = $linha['tempoconj'];
                    $alcance_magia = $linha['alcance'];
                    $componentes_magia = $linha['componentes'];
                    $duracao_magia = $linha['duracao'];
                    $descricao_magia = $linha['descricao'];
                    $descricaolvl_magia = $linha['descricaolvl'];
                    $like_magia = $linha['curtidas'];
                    // echo strstr($conjurador_magia, ',', false);
                    ?>
                    <div class="box_total">
                        <div class="box_inicio">
                            <div class="title">
                                <?php
                                echo "<p>$nome_magia</p>";
                                ?>
                            </div>
                            <div class="level">
                                <?php
                                echo "<p>$nivel_magia º nível de $escola_magia</p>"
                                ?>
                            </div>
                        </div>
                        <div class="info_basica">
                            <?php
                            echo "<p><span class='sub'>Conjugadores:</span> <span class='conj'>$conjurador_magia</span></p>";
                            echo "<p><span class='sub'>Alcance:</span> $alcance_magia</p>";
                            echo "<p><span class='sub'>Tempo de Conjuração:</span> $tempo_magia</p>";
                            echo "<p><span class='sub'>Componentes:</span> $componentes_magia</p>";
                            echo "<p><span class='sub'>Duração:</span> $duracao_magia</p>";
                            ?>
                        </div>
                        <div class="desc">
                            <?php
                            echo "<p>$descricao_magia</p>";
                            echo "<p><span class='sub'>Níveis Superiores:</span> $descricaolvl_magia</p>";
                            ?>
                        </div>
                        <div class="like">
                            <?php
                            echo "<img src='img/pocao_vazio.png' class='imgPocao' id='$id' onclick='animacao($id)'>"
                            ?>
                        </div>
                    </div>
            <?php
            $q += 1;
            $s += 1;
            if ($q == 2){
                echo "</div>\n<div class='linha'>";
                $q = 0;
            } else {
                if ($s < $selecao){} else {
                    echo "</div>";
                }
            }
            }
            ?>
                </div>
            </div> <!-- Fechando DIV pag  -->
 
            <?php
        } else if ($op == 1){
            ?>

            

            <?php
        } else if ($op == 2){
            ?>
            
            <div class="pag">
                <a class="button" href="cad_magia.php">Adicionar Magia +</a>
                <div class="magias">
            <?php

            $conetca = conecta();

            $texto_sql = @ "SELECT * FROM magia WHERE user='$nome'";
            $resultado = @ mysqli_query($conetca, $texto_sql);
            $selecao = mysqli_num_rows($resultado);

            $q = 0;
            $s = 0;

            while ($linha = mysqli_fetch_array($resultado)){
                    if ($q == 0){
                        echo "<div class='linha'>";
                    }
                    $id = $linha['id'];
                    $nome_magia = $linha['nome'];
                    $escola_magia = $linha['escola'];
                    $nivel_magia = $linha['nivel'];
                    $conjurador_magia = $linha['conjurador'];
                    $tempo_magia = $linha['tempoconj'];
                    $alcance_magia = $linha['alcance'];
                    $componentes_magia = $linha['componentes'];
                    $duracao_magia = $linha['duracao'];
                    $descricao_magia = $linha['descricao'];
                    $descricaolvl_magia = $linha['descricaolvl'];
                    $like_magia = $linha['curtidas'];
                    // echo strstr($conjurador_magia, ',', false);
                    ?>
                    <div class="box_total">
                        <div class="box_inicio">
                            <div class="title">
                                <?php
                                echo "<p>$nome_magia</p>";
                                ?>
                            </div>
                            <div class="level">
                                <?php
                                echo "<p>$nivel_magia º nível de $escola_magia</p>"
                                ?>
                            </div>
                        </div>
                        <div class="info_basica">
                            <?php
                            echo "<p><span class='sub'>Conjugadores:</span> <span class='conj'>$conjurador_magia</span></p>";
                            echo "<p><span class='sub'>Alcance:</span> $alcance_magia pés</p>";
                            echo "<p><span class='sub'>Tempo de Conjuração:</span> $tempo_magia Ação</p>";
                            echo "<p><span class='sub'>Componentes:</span> $componentes_magia</p>";
                            echo "<p><span class='sub'>Duração:</span> $duracao_magia</p>";
                            ?>
                        </div>
                        <div class="desc">
                            <?php
                            echo "<p>$descricao_magia</p>";
                            echo "<p><span class='sub'>Níveis Superiores:</span> $descricaolvl_magia</p>";
                            ?>
                        </div>
                        <div class="like">
                            <?php
                            echo "<img src='img/pocao_vazio.png' class='imgPocao' id='$id' onclick='animacao($id)'>"
                            ?>
                        </div>
                    </div>
            <?php
            $q += 1;
            $s += 1;
            if ($q == 2){
                echo "</div>\n<div class='linha'>";
                $q = 0;
            } else {
                if ($s = $selecao){} else {
                    echo "</div>";
                }
            }
            }
            ?>
                </div>
            </div> <!-- Fechando DIV pag  -->
            <?php
        } 
    ?>

    </body>
    <script src="js/function.js"></script>
</html>