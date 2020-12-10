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
                    <?php
                        if ($op == 0){
                            echo "<li class='selec'><a href='?op=0'>Magias Universais</a></li>";
                    ?>
                            <li><a href="?op=1">Magias Preferidas</a></li>
                            <li><a href="?op=2">Minhas Magias</a></li>
                            <li><a onclick="sair()">Sair</a></li>
                    <?php
                        } else if ($op == 1){
                    ?>
                            <li><a href="?op=0">Magias Universais</a></li>
                    <?php
                            echo "<li class='selec'><a href='?op=1'>Magias Preferidas</a></li>";
                    ?>
                            <li><a href="?op=2">Minhas Magias</a></li>
                            <li><a onclick="sair()">Sair</a></li>
                    <?php
                        } else if ($op == 2){
                    ?>
                            <li><a href="?op=0">Magias Universais</a></li>
                            <li><a href="?op=1">Magias Preferidas</a></li>
                    <?php
                            echo "<li class='selec'><a href='?op=2'>Minhas Magias</a></li>";
                    ?>
                            <li><a onclick="sair()">Sair</a></li>
                    <?php
                        }
                    ?>
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

            $texto_sql = @ "SELECT * FROM magia";
            $resultado = @ mysqli_query($conetca, $texto_sql);
            $selecao = mysqli_num_rows($resultado);

            $q = 0;
            $s = 0;
            
            if ($q == 0){
                echo "<div class='linha'>";
            }
            while ($linha = mysqli_fetch_array($resultado)){
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

                    $texto_sql = @ "SELECT * FROM cad_user WHERE nome='$nome'";
                    $result = @ mysqli_query($conetca, $texto_sql);

                    while ($linha = mysqli_fetch_array($result)){
                        $magias = $linha['magias'];
                    }

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
                            if (stripos($magias, $nome_magia) == false){
                                echo "<form action='?op=3' id='form$id' method='POST'>";
                                echo "<button type='submit' name='id' value='$id'><img src='img/pocao_vazio.png' class='imgPocao'id='$id'onclick='animacao($id)'></button>";
                            } else {
                                echo "<form action='?op=3' id='form$id' method='POST'>";
                                echo "<button type='submit' name='id' value='$id'><img src='img/pocao_like.png' class='imgPocao'id='$id'onclick='animacao($id)'></button>";
                            }
                            ?>
                            </form>
                        </div>
                    </div>
            <?php
            $q += 1;
            $s += 1;
            if ($q == 2){
                echo "</div>\n<div class='linha'>";
                $q = 0;
            } else {
                if ($s <= $selecao){} else {
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
            <div class="pag">
                <div class="magias">
                <?php

                $conetca = conecta();

                $texto_sql = @ "SELECT * FROM cad_user WHERE nome='$nome'";
                $nome_fav = @ mysqli_query($conetca, $texto_sql);

                while ($linha = mysqli_fetch_array($nome_fav)){
                    $nome_fav_result = $linha['magias'];
                }

                $contador = substr_count($nome_fav_result, ";");
                $eba = $contador;
                $eba -= 1;
                $letra = strlen($nome_fav_result);
                $x = 1;

                $nomes = array();

                $pontoVirgula = stripos($nome_fav_result, ";");
                $nome_fav_result = substr_replace($nome_fav_result, "", $pontoVirgula, 1);

                if (stripos($nome_fav_result, ";") == false){
                    $nomes[0] = $nome_fav_result;
                } else {
                    while($contador >= $x){
                        if ($eba == 0){
                            $pontoVirgula = (strripos($nome_fav_result, ":") + 1);
                            $nomes[$x] = substr($nome_fav_result, $pontoVirgula);
                        } else {
                            $pontoVirgula = stripos($nome_fav_result, ";");
                            $nome_fav_result = substr_replace($nome_fav_result, ":", $pontoVirgula, 1);
                            $nomes[$x] = substr($nome_fav_result, 0, $pontoVirgula);
                            $eba = substr_count($nome_fav_result, ";");
                        }
                        
                        $x += 1;
                    }
                }

                // while($contador >= $x){
                //     if ($eba == 0){
                //         $pontoVirgula = (strripos($nome_fav_result, ":") + 1);
                //         $nomes[$x] = substr($nome_fav_result, $pontoVirgula);
                //     } else {
                //         $pontoVirgula = stripos($nome_fav_result, ";");
                //         $nome_fav_result = substr_replace($nome_fav_result, "", $pontoVirgula, 1);
                //         mensagem($nome_fav_result);
                //         $pontoVirgula = stripos($nome_fav_result, ";");
                //         $nomes[$x] = substr($nome_fav_result, 1, $pontoVirgula);
                //         $eba = substr_count($nome_fav_result, ";");
                //     }
                    
                //     $x += 1;
                // }


                $x = 0;
                $y = count($nomes) - 1;

                if (count($nomes) > 1){
                    $x = 1;
                    $y = count($nomes);
                }


                while ($x <= $y){
                    $nome_magia = $nomes[$x];
                    $conetca = conecta();
                    $texto_sql = @ "SELECT * FROM magia WHERE nome='$nome_magia'";
                    $resultado = @ mysqli_query($conetca, $texto_sql);
                    $selecao = mysqli_num_rows($resultado);

                    $q = 0;
                    $s = 0;
                    
                    if ($q == 0){
                        echo "<div class='linha_full'>";
                    }
                    while ($linha = mysqli_fetch_array($resultado)){
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
                                        echo "<form action='?op=3' id='form$id' method='POST'>";
                                        echo "<button type='submit' name='id' value='$id'><img src='img/pocao_like.png' class='imgPocao'id='$id'onclick='animacao($id)'></button>";
                                    ?>
                                    </form>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                <?php
                $x += 1;
                $q += 1;
                $s += 1;
                if ($q == 2){
                    echo "</div>\n<div class='linha'>";
                    $q = 0;
                } else {
                    if ($s <= $selecao){} else {
                        echo "</div>";
                    }
                }
                }
                ?>
                </div>
            </div> <!-- Fechando DIV pag  -->
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
            
            if ($q == 0){
                echo "<div class='linha'>";
            }
            while ($linha = mysqli_fetch_array($resultado)){
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

                    $texto_sql = @ "SELECT * FROM cad_user WHERE nome='$nome'";
                    $result = @ mysqli_query($conetca, $texto_sql);

                    while ($linha = mysqli_fetch_array($result)){
                        $magias = $linha['magias'];
                    }

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
                            if (stripos($magias, $nome_magia) == false){
                                echo "<form action='?op=3' id='form$id' method='POST'>";
                                echo "<button type='submit' name='id' value='$id'><img src='img/pocao_vazio.png' class='imgPocao'id='$id'onclick='animacao($id)'></button>";
                            } else {
                                echo "<form action='?op=3' id='form$id' method='POST'>";
                                echo "<button type='submit' name='id' value='$id'><img src='img/pocao_like.png' class='imgPocao'id='$id'onclick='animacao($id)'></button>";
                            }
                            ?>
                            </form>
                        </div>
                    </div>
            <?php
            $q += 1;
            $s += 1;
            if ($q == 2){
                echo "</div>\n<div class='linha'>";
                $q = 0;
            } else {
                if ($s <= $selecao){} else {
                    echo "</div>";
                }
            }
            }
            ?>
                </div>
            </div> <!-- Fechando DIV pag  -->

            <?php
        } else if ($op == 3){
            $id = $_REQUEST['id'];
            $nome = $_SESSION['nome'];
            
            $texto_sql = "SELECT * FROM cad_user WHERE nome='$nome'";
            $con = conecta();
            $result = mysqli_query($con,$texto_sql);

            while($linha = mysqli_fetch_array($result)){
                $magias = $linha['magias'];
            }

            $texto_sql = "SELECT * FROM magia WHERE id='$id'";
            $con = conecta();
            $result = mysqli_query($con,$texto_sql);

            while($linha = mysqli_fetch_array($result)){
                $magia_atual = $linha['nome'];
            }

            if (stripos($magias, $magia_atual) == false){
                $texto_sql = "UPDATE cad_user SET magias='$magias;$magia_atual' WHERE nome='$nome'";
                $con = conecta();
                $result = mysqli_query($con,$texto_sql);

                trocaPagina("?op=0");
            } else {
                $magias = str_replace(";$magia_atual", "", $magias);

                $texto_sql = "UPDATE cad_user SET magias='$magias' WHERE nome='$nome'";
                $con = conecta();
                $result = mysqli_query($con,$texto_sql);

                trocaPagina("?op=0");
            }

            
        }
    ?>

    </body>
    <script src="js/function.js"></script>
</html>