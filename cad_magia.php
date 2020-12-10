<?php

    session_start();

    include ("funcoes.php");
    
    $op = @ $_REQUEST['op'];

    if (!isset($op))
    {
        $op = 0;
    }

    $nome = $_SESSION['nome'];

?>

<html>
    <head>
        <title>Projeto Magic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/cad_user.css">

        <script type="text/javascript">
            function somenteNumeros(e) {
            var charCode = e.charCode ? e.charCode : e.keyCode;
            // charCode 8 = backspace
            // charCode 9 = tab
            if (charCode != 8 && charCode != 9) {
                // charCode 48 equivale a 0
                // charCode 57 equivale a 9
                if (charCode < 48 || charCode > 57) {
                    return false;
                }
            }
        }
        </script>
    </head>
    <body>
    
    <?php

    if ($op == 0){

    ?>
        <div class="princ">
            <img src="img/logo.png" class="logo">

            <form class="form" action="?op=1" method="POST">
                <div class="input">
                    <label>Nome da Magia</label>
                    <input type="text" class="nome" name="nome_magia" maxlength="64" placeholder="Digite o Nome da Magia">
                </div>

                <div class="input">
                    <label>Nome da Escola</label>
                    <select name="escola" class="escola" required>
                        <option value="Abjuração">Abjuração</option> 
                        <option value="Adivinhação">Adivinhação</option>
                        <option value="Conjuração">Conjuração</option>
                        <option value="Encantamento">Encantamento</option> 
                        <option value="Evocação">Evocação</option>
                        <option value="Ilusão">Ilusão</option>
                        <option value="Necromancia">Necromancia</option>
                        <option value="Transmutação">Transmutação</option>
                    </select>
                </div>

                <div class="input">
                    <label>Nível</label>
                    <input type="text" class="nivel" name="nivel" maxlength="1" placeholder="Digite o Nível" onkeypress="return somenteNumeros(event)">
                </div>

                <div class="checkbox">
                    <label>Conjurador</label>
                    <div><input type="checkbox" class="mago" name="mago" value="Mago"><label class="check" for="mago">Mago</label></div>
                    <div><input type="checkbox" class="feiticeiro" name="feiticeiro" value="feiticeiro"><label class="check" for="feiticeiro">Feiticeiro</label></div>
                    <div><input type="checkbox" class="bardo" name="bardo" value="bardo"><label class="check" for="bardo">Bardo</label></div>
                    <div><input type="checkbox" class="paladino" name="paladino" value="paladino"><label class="check" for="paladino">Paladino</label></div>
                    <div><input type="checkbox" class="clerigo" name="clerigo" value="clerigo"><label class="check" for="clerigo">Clérigo</label></div>
                    <div><input type="checkbox" class="druida" name="druida" value="druida"><label class="check" for="druida">Druída</label></div>
                    <div><input type="checkbox" class="bruxo" name="bruxo" value="bruxo"><label class="check" for="bruxo">Bruxo</label></div>
                    <div><input type="checkbox" class="patrulheiro" name="patrulheiro" value="patrulheiro"><label class="check" for="patrulheiro">Patrulheiro</label></div>
                </div>

                <div class="checkbox">
                    <label>Possui Ritual?</label>
                    <div class="flex">
                        <label class="check"><input type="radio" class="ritual" name="ritual" value="S">Sim</label>
                        <label class="check"><input type="radio" class="ritual" name="ritual" value="N">Não</label>
                    </div>
                </div>

                <div class="checkbox">
                    <label>Tempo de Conjuração</label>
                    <div class="input">
                        <input type="text" class="tconjuracao" name="tconjuracao" maxlength="2" placeholder="Digite o Tempo de Conjuração" onkeypress="return somenteNumeros(event)">
                    </div>
                    <div>
                        <div class="flex_temp">
                            <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                            <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                            <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                            <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                            <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                        </div>
                    </div>
                </div>

                

                <div class="input">
                    <label>Alcance</label>
                    <input type="text" class="alcance" name="alcance" maxlength="8" placeholder="Digite o alcance">
                </div>

                <div class="checkbox">
                    <label>Componentes</label>
                    <div><input type="checkbox" class="V" name="V" value="V"><label class="check" for="V">V</label></div>
                    <div><input type="checkbox" class="S" name="S" value="S"><label class="check" for="S">S</label></div>
                    <div><input type="checkbox" class="M" name="M" value="M"><label class="check" for="M">M</label></div>
                </div>

                <div class="input">
                    <label>Duração</label>
                    <input type="text" class="duração" name="duracao" maxlength="12" placeholder="Digite a duração">
                </div>

                <div class="textarea">
                    <label>Descrição da Magia</label>
                    <textarea class="desc" name="desc" maxlength="500" placeholder="Digite a Descrição da Magia"></textarea>
                </div>

                <div class="textarea">
                    <label>Descrição em Níveis Superiores</label>
                    <textarea class="desclvl" name="desclvl" maxlength="500" placeholder="Digite a Descrição em Níveis Superiores"></textarea>
                </div>

                <div class="botoes">
                    <input type="submit" value="Confirme" class="button">
                    <a href="pag_princi.php" class="button dois">Voltar</a>
                </div>
            </form>
        </div>
        <?php
    }

                if ($op == 1){
                    $nome_magia = $_REQUEST['nome_magia'];
                    $escola = $_REQUEST['escola'];
                    $nivel = $_REQUEST['nivel'];
                    
                    $mago = @ $_REQUEST['mago'];
                    $feiticeiro = @ $_REQUEST['feiticeiro'];
                    $bardo = @ $_REQUEST['bardo'];
                    $paladino = @ $_REQUEST['paladino'];
                    $clerigo = @ $_REQUEST['clerigo'];
                    $druida = @ $_REQUEST['druida'];
                    $bruxo = @ $_REQUEST['bruxo'];
                    $patrulheiro = @ $_REQUEST['patrulheiro'];
                    $conjurador = "";

                    $ritual = $_REQUEST['ritual'];
                    $tconjuracao = $_REQUEST['tconjuracao'];
                    $tempoconj = $_REQUEST['tempoconj'];
                    $temp = "";
                    $alcance = $_REQUEST['alcance'];

                    $v = $_REQUEST['V'];
                    $s = $_REQUEST['S'];
                    $m = $_REQUEST['M'];

                    $duracao = $_REQUEST['duracao'];
                    $desc = $_REQUEST['desc'];
                    $desclvl = $_REQUEST['desclvl'];

                    $erro = false;
                    $mensagem = "";

                    if ($nome_magia == ""){
                        $erro = true;
                        $mensagem .= "O nome da magia não pode estar em branco!\\n";
                    }

                    if ($nivel == ""){
                        $erro = true;
                        $mensagem .= "O nível da magia não pode estar em branco!\\n";
                    }

                    if ($mago != "" && $feiticeiro != "" && $bardo != "" && $paladino != "" && $clerigo != "" && $druida != "" && $bruxo != "" && $patrulheiro != "" ){
                        $erro = true;
                        $mensagem .= "Pelo menos um conjurador deve ser selecionado!\\n";
                    } else {
                        if ($mago == "mago"){
                            $conjurador .= "Mago ";
                        }

                        if ($feiticeiro == "feiticeiro"){
                            $conjurador .= "Feiticeiro ";
                        }

                        if ($bardo == "bardo"){
                            $conjurador .= "Bardo ";
                        }

                        if ($paladino == "paladino"){
                            $conjurador .= "Paladino ";
                        }

                        if ($clerigo == "clerigo"){
                            $conjurador .= "Clérigo ";
                        }

                        if ($druida == "druida"){
                            $conjurador .= "Druida ";
                        }

                        if ($bruxo == "bruxo"){
                            $conjurador .= "Bruxo ";
                        }

                        if ($patrulheiro == "patrulheiro"){
                            $conjurador .= "Patrulheiro ";
                        }
                    }

                    if ($ritual == ""){
                        $erro = true;
                        $mensagem .= "O ritual tem que ser selecionado!\\n";
                    }

                    if ($tconjuracao == ""){
                        $erro = true;
                        $mensagem .= "O tempo de conjuração não pode estar em branco!\\n";
                    } else if ($tempoconj == ""){
                        $erro = true;
                        $mensagem .= "Selecione o tempo de conjuração!\\n";
                    } else {
                        $temp .= $tconjuracao;
                        $temp .= " ";
                        $temp .= $tempoconj;
                    }

                    if ($alcance == ""){
                        $erro = true;
                        $mensagem .= "O alcance não pode estar em branco!\\n";
                    }

                    if ($v == "" && $s == "" && $m == ""){
                        $erro = true;
                        $mensagem .= "Pelo menos um componente deve ser selecionado!\\n";
                    } else {
                        if ($v == "V"){
                            $componentes .= $v;
                        }
                        if ($s == "S"){
                            $componentes .= $s;
                        }
                        if ($m == "M"){
                            $componentes .= $m;
                        }
                    }

                    if ($duracao == ""){
                        $erro = true;
                        $mensagem .= "A duração não pode estar em branco!\\n";
                    }

                    if ($desc == ""){
                        $erro = true;
                        $mensagem .= "A descrição não pode estar em branco!\\n";
                    }

                    if ($desclvl == ""){
                        $desclvl = " ";
                    }


//================================================= Caso der Erro ================================================
                    if ($erro == true){
                        mensagem($mensagem);
                        ?>
                        <div class="princ">
                            <img src="img/logo.png" class="logo">
                            <form class="form" action="?op=1" method="POST">
                                <div class="input">
                                    <label>Nome da Magia</label>
                                    <?php
                                    echo "<input type='text' class='nome' name='nome_magia' maxlength='64' placeholder='Digite o Nome da Magia' value='$nome_magia'>"
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Nome da Escola</label>
                                    <select name="escola" class="escola" required>
                                        <?php
                                            if ($escola == "Abjuração"){
                                                ?>
                                                <option value="Abjuração" selected>Abjuração</option>
                                                <option value="Adivinhação">Adivinhação</option>
                                                <option value="Conjuração">Conjuração</option>
                                                <option value="Encantamento">Encantamento</option> 
                                                <option value="Evocação">Evocação</option>
                                                <option value="Ilusão">Ilusão</option>
                                                <option value="Necromancia">Necromancia</option>
                                                <option value="Transmutação">Transmutação</option>
                                                <?php
                                            } else if ($escola == "Adivinhação"){
                                                ?>
                                                <option value="Abjuração">Abjuração</option>
                                                <option value="Adivinhação" selected>Adivinhação</option>
                                                <option value="Conjuração">Conjuração</option>
                                                <option value="Encantamento">Encantamento</option> 
                                                <option value="Evocação">Evocação</option>
                                                <option value="Ilusão">Ilusão</option>
                                                <option value="Necromancia">Necromancia</option>
                                                <option value="Transmutação">Transmutação</option>
                                                <?php
                                            } else if ($escola == "Conjuração"){
                                                ?>
                                                <option value="Abjuração">Abjuração</option>
                                                <option value="Adivinhação">Adivinhação</option>
                                                <option value="Conjuração" selected>Conjuração</option>
                                                <option value="Encantamento">Encantamento</option> 
                                                <option value="Evocação">Evocação</option>
                                                <option value="Ilusão">Ilusão</option>
                                                <option value="Necromancia">Necromancia</option>
                                                <option value="Transmutação">Transmutação</option>
                                                <?php
                                            } else if ($escola == "Encantamento"){
                                                ?>
                                                <option value="Abjuração">Abjuração</option>
                                                <option value="Adivinhação">Adivinhação</option>
                                                <option value="Conjuração">Conjuração</option>
                                                <option value="Encantamento" selected>Encantamento</option> 
                                                <option value="Evocação">Evocação</option>
                                                <option value="Ilusão">Ilusão</option>
                                                <option value="Necromancia">Necromancia</option>
                                                <option value="Transmutação">Transmutação</option>
                                                <?php
                                            } else if ($escola == "Evocação"){
                                                ?>
                                                <option value="Abjuração">Abjuração</option>
                                                <option value="Adivinhação">Adivinhação</option>
                                                <option value="Conjuração">Conjuração</option>
                                                <option value="Encantamento">Encantamento</option> 
                                                <option value="Evocação" selected>Evocação</option>
                                                <option value="Ilusão">Ilusão</option>
                                                <option value="Necromancia">Necromancia</option>
                                                <option value="Transmutação">Transmutação</option>
                                                <?php
                                            } else if ($escola == "Ilusão"){
                                                ?>
                                                <option value="Abjuração">Abjuração</option>
                                                <option value="Adivinhação">Adivinhação</option>
                                                <option value="Conjuração">Conjuração</option>
                                                <option value="Encantamento">Encantamento</option> 
                                                <option value="Evocação">Evocação</option>
                                                <option value="Ilusão" selected>Ilusão</option>
                                                <option value="Necromancia">Necromancia</option>
                                                <option value="Transmutação">Transmutação</option>
                                                <?php
                                            } else if ($escola == "Necromancia"){
                                                ?>
                                                <option value="Abjuração">Abjuração</option>
                                                <option value="Adivinhação">Adivinhação</option>
                                                <option value="Conjuração">Conjuração</option>
                                                <option value="Encantamento">Encantamento</option> 
                                                <option value="Evocação">Evocação</option>
                                                <option value="Ilusão">Ilusão</option>
                                                <option value="Necromancia" selected>Necromancia</option>
                                                <option value="Transmutação">Transmutação</option>
                                                <?php
                                            }else if ($escola == "Transmutação"){
                                                ?>
                                                <option value="Abjuração">Abjuração</option>
                                                <option value="Adivinhação">Adivinhação</option>
                                                <option value="Conjuração">Conjuração</option>
                                                <option value="Encantamento">Encantamento</option> 
                                                <option value="Evocação">Evocação</option>
                                                <option value="Ilusão">Ilusão</option>
                                                <option value="Necromancia">Necromancia</option>
                                                <option value="Transmutação" selected>Transmutação</option>
                                                <?php
                                            }
                                        ?>
                                    </select>
                                </div>

                                <div class="input">
                                    <label>Nível</label>
                                    <?php
                                    echo "<input type='text' class='nivel' name='nivel' maxlength='1' placeholder='Digite o Nível' value='$nivel'>";
                                    ?>
                                </div>

                                <div class="checkbox">
                                    <label>Conjurador</label>
                                    <?php
                                    if ($mago == "mago"){
                                    ?>
                                        <div><input type="checkbox" class="mago" name="mago" value="Mago" checked><label class="check" for="mago">Mago</label></div>
                                    <?php  
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="mago" name="mago" value="Mago"><label class="check" for="mago">Mago</label></div>
                                    <?php
                                    }
                                    if ($feiticeiro == "feiticeiro"){
                                    ?>
                                        <div><input type="checkbox" class="feiticeiro" name="feiticeiro" value="feiticeiro" checked><label class="check" for="feiticeiro">Feiticeiro</label></div>
                                    <?php  
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="feiticeiro" name="feiticeiro" value="feiticeiro"><label class="check" for="feiticeiro">Feiticeiro</label></div>
                                    <?php
                                    }
                                    if ($bardo == "bardo"){
                                    ?>
                                        <div><input type="checkbox" class="bardo" name="bardo" value="bardo" checked><label class="check" for="bardo">Bardo</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="bardo" name="bardo" value="bardo"><label class="check" for="bardo">Bardo</label></div>
                                    <?php
                                    }
                                    if ($paladino == "paladino"){
                                    ?>
                                        <div><input type="checkbox" class="paladino" name="paladino" value="paladino" checked><label class="check" for="paladino">Paladino</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="paladino" name="paladino" value="paladino"><label class="check" for="paladino">Paladino</label></div>
                                    <?php
                                    }
                                    if ($clerigo == "clerigo") {
                                    ?>
                                        <div><input type="checkbox" class="clerigo" name="clerigo" value="clerigo" checked><label class="check" for="clerigo">Clérigo</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="clerigo" name="clerigo" value="clerigo"><label class="check" for="clerigo">Clérigo</label></div>
                                    <?php
                                    }
                                    if ($druida == "druida"){
                                    ?>
                                        <div><input type="checkbox" class="druida" name="druida" value="druida" checked><label class="check" for="druida">Druída</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="druida" name="druida" value="druida"><label class="check" for="druida">Druída</label></div>
                                    <?php
                                    }
                                    if ($bruxo == "bruxo"){
                                    ?>
                                        <div><input type="checkbox" class="bruxo" name="bruxo" value="bruxo" checked><label class="check" for="bruxo">Bruxo</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="bruxo" name="bruxo" value="bruxo"><label class="check" for="bruxo">Bruxo</label></div>
                                    <?php
                                    }
                                    if ($patrulheiro == "patrulheiro"){
                                    ?>
                                        <div><input type="checkbox" class="patrulheiro" name="patrulheiro" value="patrulheiro" checked><label class="check" for="patrulheiro">Patrulheiro</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="patrulheiro" name="patrulheiro" value="patrulheiro"><label class="check" for="patrulheiro">Patrulheiro</label></div>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <div class="checkbox">
                                    <label>Possui Ritual?</label>
                                    <div class="flex">
                                        <?php
                                        if ($ritual == "S"){
                                            ?>
                                                <label class="check"><input type="radio" class="ritual" name="ritual" value="S" checked>Sim</label>
                                                <label class="check"><input type="radio" class="ritual" name="ritual" value="N">Não</label>
                                            <?php
                                        } else if ($ritual == "N"){
                                            ?>
                                                <label class="check"><input type="radio" class="ritual" name="ritual" value="S">Sim</label>
                                                <label class="check"><input type="radio" class="ritual" name="ritual" value="N"  checked>Não</label>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>

                                <div class="checkbox">
                                    <label>Tempo de Conjuração</label>
                                    <div class="input">
                                        <?php
                                            echo "<input type='text' class='tconjuracao' name='tconjuracao' maxlength='2' placeholder='Digite o Tempo de Conjuração' onkeypress='return somenteNumeros(event)' value='$tconjuracao'>";
                                        ?>
                                    </div>
                                    <div>
                                        <div class="flex_temp">
                                            <?php
                                                if ($tempoconj == "Ação"){
                                                    ?>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação" checked>Ação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                    <?php
                                                } else if ($tempoconj == "Ação Bonus"){
                                                    ?>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus" checked>Ação Bônus</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                    <?php
                                                } else if ($tempoconj == "Reação"){
                                                    ?>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação" checked>Reação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                    <?php
                                                } else if ($tempoconj == "Minutos"){
                                                    ?>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos" checked>Minutos</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                    <?php
                                                } else if ($tempoconj == "Horas"){
                                                    ?>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                    <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas" checked>Horas</label>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    </div>
                                </div>

                                <div class="input">
                                    <label>Alcance</label>
                                    <?php
                                        echo "<input type='text' class='alcance' name='alcance' maxlength='4' placeholder='Digite o alcance' value='$alcance'>"
                                    ?>
                                </div>

                                <div class="checkbox">
                                    <label>Componentes</label>
                                    <?php
                                    if ($v == "V"){
                                    ?>
                                        <div><input type="checkbox" class="V" name="V" value="V" checked><label class="check" for="V">V</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="V" name="V" value="V"><label class="check" for="V">V</label></div>
                                    <?php
                                    }
                                    if ($s == "S"){
                                    ?>
                                        <div><input type="checkbox" class="S" name="S" value="S" checked><label class="check" for="S" >S</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="S" name="S" value="S"><label class="check" for="S">S</label></div>
                                    <?php
                                    }
                                    if ($m == "M"){
                                    ?>
                                        <div><input type="checkbox" class="M" name="M" value="M" checked><label class="check" for="M">M</label></div>
                                    <?php
                                    } else {
                                    ?>
                                        <div><input type="checkbox" class="M" name="M" value="M"><label class="check" for="M">M</label></div>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Duração</label>
                                    <?php
                                    echo "<input type='text' class='duração' name='duracao' maxlength='12' placeholder='Digite a duração' value='$duracao'>"
                                    ?>
                                </div>

                                <div class="textarea">
                                    <label>Descrição da Magia</label>
                                    <?php
                                    echo "<textarea class='desc' name='desc' maxlength='500' placeholder='Digite a Descrição da Magia' value='$desc'></textarea>"
                                    ?>
                                </div>

                                <div class="textarea">
                                    <label>Descrição em Níveis Superiores</label>
                                    <?php
                                    echo "<textarea class='desclvl' name='desclvl' maxlength='500' placeholder='Digite a Descrição em Níveis Superiores' value='$desclvl'></textarea>"
                                    ?>
                                </div>

                                <div class="botoes">
                                    <input type="submit" value="Confirme" class="button">
                                    <a href="pag_princi.php" class="button dois">Voltar</a>
                                </div>
                            </form>
                        </div>

                        <?php
                    } else {
                        $conn = conecta();
                        $texto_sql = "INSERT INTO magia (user, nome, escola, nivel, conjurador, ritual, tempoconj, alcance, componentes, duracao, descricao, descricaolvl, curtidas) VALUES ('$nome', '$nome_magia', '$escola', '$nivel', '$conjurador', '$ritual', '$temp', '$alcance', '$componentes', '$duracao', '$desc', '$desclvl', '0')";
                        $resultado = mysqli_query($conn,$texto_sql);
                            
                        if ($resultado > 0){

                            $texto_sql = "SELECT * FROM cad_user WHERE nome='$nome'";
                            $resultado = mysqli_query($conn,$texto_sql);
                            $quantidade_registros = mysqli_num_rows($resultado);

                            if ($quantidade_registros != 0){
                                while ($linha = mysqli_fetch_array($resultado)){
                                    $magia = $linha['magias'];
                                }
                            } else {
                                mensagem("Ocorreu um erro ao enviar os dados, tente novamente.");
                                ?>
                                   <div class="princ">
                                        <img src="img/logo.png" class="logo">
                                        <form class="form" action="?op=1" method="POST">
                                            <div class="input">
                                                <label>Nome da Magia</label>
                                                <?php
                                                echo "<input type='text' class='nome' name='nome_magia' maxlength='64' placeholder='Digite o Nome da Magia' value='$nome_magia'>"
                                                ?>
                                            </div>

                                            <div class="input">
                                                <label>Nome da Escola</label>
                                                <select name="escola" class="escola" required>
                                                    <?php
                                                        if ($escola == "Abjuração"){
                                                            ?>
                                                            <option value="Abjuração" selected>Abjuração</option>
                                                            <option value="Adivinhação">Adivinhação</option>
                                                            <option value="Conjuração">Conjuração</option>
                                                            <option value="Encantamento">Encantamento</option> 
                                                            <option value="Evocação">Evocação</option>
                                                            <option value="Ilusão">Ilusão</option>
                                                            <option value="Necromancia">Necromancia</option>
                                                            <option value="Transmutação">Transmutação</option>
                                                            <?php
                                                        } else if ($escola == "Adivinhação"){
                                                            ?>
                                                            <option value="Abjuração">Abjuração</option>
                                                            <option value="Adivinhação" selected>Adivinhação</option>
                                                            <option value="Conjuração">Conjuração</option>
                                                            <option value="Encantamento">Encantamento</option> 
                                                            <option value="Evocação">Evocação</option>
                                                            <option value="Ilusão">Ilusão</option>
                                                            <option value="Necromancia">Necromancia</option>
                                                            <option value="Transmutação">Transmutação</option>
                                                            <?php
                                                        } else if ($escola == "Conjuração"){
                                                            ?>
                                                            <option value="Abjuração">Abjuração</option>
                                                            <option value="Adivinhação">Adivinhação</option>
                                                            <option value="Conjuração" selected>Conjuração</option>
                                                            <option value="Encantamento">Encantamento</option> 
                                                            <option value="Evocação">Evocação</option>
                                                            <option value="Ilusão">Ilusão</option>
                                                            <option value="Necromancia">Necromancia</option>
                                                            <option value="Transmutação">Transmutação</option>
                                                            <?php
                                                        } else if ($escola == "Encantamento"){
                                                            ?>
                                                            <option value="Abjuração">Abjuração</option>
                                                            <option value="Adivinhação">Adivinhação</option>
                                                            <option value="Conjuração">Conjuração</option>
                                                            <option value="Encantamento" selected>Encantamento</option> 
                                                            <option value="Evocação">Evocação</option>
                                                            <option value="Ilusão">Ilusão</option>
                                                            <option value="Necromancia">Necromancia</option>
                                                            <option value="Transmutação">Transmutação</option>
                                                            <?php
                                                        } else if ($escola == "Evocação"){
                                                            ?>
                                                            <option value="Abjuração">Abjuração</option>
                                                            <option value="Adivinhação">Adivinhação</option>
                                                            <option value="Conjuração">Conjuração</option>
                                                            <option value="Encantamento">Encantamento</option> 
                                                            <option value="Evocação" selected>Evocação</option>
                                                            <option value="Ilusão">Ilusão</option>
                                                            <option value="Necromancia">Necromancia</option>
                                                            <option value="Transmutação">Transmutação</option>
                                                            <?php
                                                        } else if ($escola == "Ilusão"){
                                                            ?>
                                                            <option value="Abjuração">Abjuração</option>
                                                            <option value="Adivinhação">Adivinhação</option>
                                                            <option value="Conjuração">Conjuração</option>
                                                            <option value="Encantamento">Encantamento</option> 
                                                            <option value="Evocação">Evocação</option>
                                                            <option value="Ilusão" selected>Ilusão</option>
                                                            <option value="Necromancia">Necromancia</option>
                                                            <option value="Transmutação">Transmutação</option>
                                                            <?php
                                                        } else if ($escola == "Necromancia"){
                                                            ?>
                                                            <option value="Abjuração">Abjuração</option>
                                                            <option value="Adivinhação">Adivinhação</option>
                                                            <option value="Conjuração">Conjuração</option>
                                                            <option value="Encantamento">Encantamento</option> 
                                                            <option value="Evocação">Evocação</option>
                                                            <option value="Ilusão">Ilusão</option>
                                                            <option value="Necromancia" selected>Necromancia</option>
                                                            <option value="Transmutação">Transmutação</option>
                                                            <?php
                                                        }else if ($escola == "Transmutação"){
                                                            ?>
                                                            <option value="Abjuração">Abjuração</option>
                                                            <option value="Adivinhação">Adivinhação</option>
                                                            <option value="Conjuração">Conjuração</option>
                                                            <option value="Encantamento">Encantamento</option> 
                                                            <option value="Evocação">Evocação</option>
                                                            <option value="Ilusão">Ilusão</option>
                                                            <option value="Necromancia">Necromancia</option>
                                                            <option value="Transmutação" selected>Transmutação</option>
                                                            <?php
                                                        }
                                                    ?>
                                                </select>
                                            </div>

                                            <div class="input">
                                                <label>Nível</label>
                                                <?php
                                                echo "<input type='text' class='nivel' name='nivel' maxlength='1' placeholder='Digite o Nível' value='$nivel'>";
                                                ?>
                                            </div>

                                            <div class="checkbox">
                                                <label>Conjurador</label>
                                                <?php
                                                if ($mago == "mago"){
                                                ?>
                                                    <div><input type="checkbox" class="mago" name="mago" value="Mago" checked><label class="check" for="mago">Mago</label></div>
                                                <?php  
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="mago" name="mago" value="Mago"><label class="check" for="mago">Mago</label></div>
                                                <?php
                                                }
                                                if ($feiticeiro == "feiticeiro"){
                                                ?>
                                                    <div><input type="checkbox" class="feiticeiro" name="feiticeiro" value="feiticeiro" checked><label class="check" for="feiticeiro">Feiticeiro</label></div>
                                                <?php  
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="feiticeiro" name="feiticeiro" value="feiticeiro"><label class="check" for="feiticeiro">Feiticeiro</label></div>
                                                <?php
                                                }
                                                if ($bardo == "bardo"){
                                                ?>
                                                    <div><input type="checkbox" class="bardo" name="bardo" value="bardo" checked><label class="check" for="bardo">Bardo</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="bardo" name="bardo" value="bardo"><label class="check" for="bardo">Bardo</label></div>
                                                <?php
                                                }
                                                if ($paladino == "paladino"){
                                                ?>
                                                    <div><input type="checkbox" class="paladino" name="paladino" value="paladino" checked><label class="check" for="paladino">Paladino</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="paladino" name="paladino" value="paladino"><label class="check" for="paladino">Paladino</label></div>
                                                <?php
                                                }
                                                if ($clerigo == "clerigo") {
                                                ?>
                                                    <div><input type="checkbox" class="clerigo" name="clerigo" value="clerigo" checked><label class="check" for="clerigo">Clérigo</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="clerigo" name="clerigo" value="clerigo"><label class="check" for="clerigo">Clérigo</label></div>
                                                <?php
                                                }
                                                if ($druida == "druida"){
                                                ?>
                                                    <div><input type="checkbox" class="druida" name="druida" value="druida" checked><label class="check" for="druida">Druída</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="druida" name="druida" value="druida"><label class="check" for="druida">Druída</label></div>
                                                <?php
                                                }
                                                if ($bruxo == "bruxo"){
                                                ?>
                                                    <div><input type="checkbox" class="bruxo" name="bruxo" value="bruxo" checked><label class="check" for="bruxo">Bruxo</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="bruxo" name="bruxo" value="bruxo"><label class="check" for="bruxo">Bruxo</label></div>
                                                <?php
                                                }
                                                if ($patrulheiro == "patrulheiro"){
                                                ?>
                                                    <div><input type="checkbox" class="patrulheiro" name="patrulheiro" value="patrulheiro" checked><label class="check" for="patrulheiro">Patrulheiro</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="patrulheiro" name="patrulheiro" value="patrulheiro"><label class="check" for="patrulheiro">Patrulheiro</label></div>
                                                <?php
                                                }
                                                ?>
                                            </div>

                                            <div class="checkbox">
                                                <label>Possui Ritual?</label>
                                                <div class="flex">
                                                    <?php
                                                    if ($ritual == "S"){
                                                        ?>
                                                            <label class="check"><input type="radio" class="ritual" name="ritual" value="S" checked>Sim</label>
                                                            <label class="check"><input type="radio" class="ritual" name="ritual" value="N">Não</label>
                                                        <?php
                                                    } else if ($ritual == "N"){
                                                        ?>
                                                            <label class="check"><input type="radio" class="ritual" name="ritual" value="S">Sim</label>
                                                            <label class="check"><input type="radio" class="ritual" name="ritual" value="N"  checked>Não</label>
                                                        <?php
                                                    }
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="checkbox">
                                                <label>Tempo de Conjuração</label>
                                                <div class="input">
                                                    <?php
                                                        echo "<input type='text' class='tconjuracao' name='tconjuracao' maxlength='2' placeholder='Digite o Tempo de Conjuração' onkeypress='return somenteNumeros(event)' value='$tconjuracao'>";
                                                    ?>
                                                </div>
                                                <div>
                                                    <div class="flex_temp">
                                                        <?php
                                                            if ($tempoconj == "Ação"){
                                                                ?>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação" checked>Ação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                                <?php
                                                            } else if ($tempoconj == "Ação Bonus"){
                                                                ?>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus" checked>Ação Bônus</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                                <?php
                                                            } else if ($tempoconj == "Reação"){
                                                                ?>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação" checked>Reação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                                <?php
                                                            } else if ($tempoconj == "Minutos"){
                                                                ?>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos" checked>Minutos</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas">Horas</label>
                                                                <?php
                                                            } else if ($tempoconj == "Horas"){
                                                                ?>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação">Ação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Ação Bônus">Ação Bônus</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Reação">Reação</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Minutos">Minutos</label>
                                                                <label class="check"><input type="radio" class="tempoconj" name="tempoconj" value="Horas" checked>Horas</label>
                                                                <?php
                                                            }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="input">
                                                <label>Alcance</label>
                                                <?php
                                                    echo "<input type='text' class='alcance' name='alcance' maxlength='4' placeholder='Digite o alcance' value='$alcance'>"
                                                ?>
                                            </div>

                                            <div class="checkbox">
                                                <label>Componentes</label>
                                                <?php
                                                if ($v == "V"){
                                                ?>
                                                    <div><input type="checkbox" class="V" name="V" value="V" checked><label class="check" for="V">V</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="V" name="V" value="V"><label class="check" for="V">V</label></div>
                                                <?php
                                                }
                                                if ($s == "S"){
                                                ?>
                                                    <div><input type="checkbox" class="S" name="S" value="S" checked><label class="check" for="S" >S</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="S" name="S" value="S"><label class="check" for="S">S</label></div>
                                                <?php
                                                }
                                                if ($m == "M"){
                                                ?>
                                                    <div><input type="checkbox" class="M" name="M" value="M" checked><label class="check" for="M">M</label></div>
                                                <?php
                                                } else {
                                                ?>
                                                    <div><input type="checkbox" class="M" name="M" value="M"><label class="check" for="M">M</label></div>
                                                <?php
                                                }
                                                ?>
                                            </div>

                                            <div class="input">
                                                <label>Duração</label>
                                                <?php
                                                echo "<input type='text' class='duração' name='duração' maxlength='12' placeholder='Digite a duração' value='$duracao'>"
                                                ?>
                                            </div>

                                            <div class="textarea">
                                                <label>Descrição da Magia</label>
                                                <?php
                                                echo "<textarea class='desc' name='desc' maxlength='500' placeholder='Digite a Descrição da Magia' value='$desc'></textarea>"
                                                ?>
                                            </div>

                                            <div class="textarea">
                                                <label>Descrição em Níveis Superiores</label>
                                                <?php
                                                echo "<textarea class='desclvl' name='desclvl' maxlength='500' placeholder='Digite a Descrição em Níveis Superiores' value='$desclvl'></textarea>"
                                                ?>
                                            </div>

                                            <div class="botoes">
                                                <input type="submit" value="Confirme" class="button">
                                                <a href="pag_princi.php" class="button dois">Voltar</a>
                                            </div>
                                        </form>
                                    </div>
                                <?php
                            }

                            $magia .= ", $nome_magia";

                            $texto_sql = "UPDATE cad_user SET magias='$magia' WHERE nome='$nome'";
                            $resultado = mysqli_query($conn,$texto_sql);

                            if ($resultado > 0){
                                mensagem("Dados enviados com sucesso!");

                                $_SESSION['nome'] = $nome;

                                trocaPagina('pag_princi.php');
                                    
                            }
                        }
                        else{
                            mensagem("Ocorreu um erro ao enviar os dados, tente novamente.");
                            ?>
                                <form class="form" action="?op=1" method="POST">
                                    <div class="input">
                                        <label>Nome da Magia</label>
                                        <?php
                                        echo "<input type='text' class='nome' name='nome_magia' maxlength='64' placeholder='Digite o Nome da Magia' value='$nome_magia'>"
                                        ?>
                                    </div>

                                    <div class="input">
                                        <label>Nome da Escola</label>
                                        <select name="escola" class="escola" required>
                                            <?php
                                                if ($escola == "Abjuração"){
                                                    ?>
                                                    <option value="Abjuração" selected>Abjuração</option>
                                                    <option value="Adivinhação">Adivinhação</option>
                                                    <option value="Conjuração">Conjuração</option>
                                                    <option value="Encantamento">Encantamento</option> 
                                                    <option value="Evocação">Evocação</option>
                                                    <option value="Ilusão">Ilusão</option>
                                                    <option value="Necromancia">Necromancia</option>
                                                    <option value="Transmutação">Transmutação</option>
                                                    <?php
                                                } else if ($escola == "Adivinhação"){
                                                    ?>
                                                    <option value="Abjuração">Abjuração</option>
                                                    <option value="Adivinhação" selected>Adivinhação</option>
                                                    <option value="Conjuração">Conjuração</option>
                                                    <option value="Encantamento">Encantamento</option> 
                                                    <option value="Evocação">Evocação</option>
                                                    <option value="Ilusão">Ilusão</option>
                                                    <option value="Necromancia">Necromancia</option>
                                                    <option value="Transmutação">Transmutação</option>
                                                    <?php
                                                } else if ($escola == "Conjuração"){
                                                    ?>
                                                    <option value="Abjuração">Abjuração</option>
                                                    <option value="Adivinhação">Adivinhação</option>
                                                    <option value="Conjuração" selected>Conjuração</option>
                                                    <option value="Encantamento">Encantamento</option> 
                                                    <option value="Evocação">Evocação</option>
                                                    <option value="Ilusão">Ilusão</option>
                                                    <option value="Necromancia">Necromancia</option>
                                                    <option value="Transmutação">Transmutação</option>
                                                    <?php
                                                } else if ($escola == "Encantamento"){
                                                    ?>
                                                    <option value="Abjuração">Abjuração</option>
                                                    <option value="Adivinhação">Adivinhação</option>
                                                    <option value="Conjuração">Conjuração</option>
                                                    <option value="Encantamento" selected>Encantamento</option> 
                                                    <option value="Evocação">Evocação</option>
                                                    <option value="Ilusão">Ilusão</option>
                                                    <option value="Necromancia">Necromancia</option>
                                                    <option value="Transmutação">Transmutação</option>
                                                    <?php
                                                } else if ($escola == "Evocação"){
                                                    ?>
                                                    <option value="Abjuração">Abjuração</option>
                                                    <option value="Adivinhação">Adivinhação</option>
                                                    <option value="Conjuração">Conjuração</option>
                                                    <option value="Encantamento">Encantamento</option> 
                                                    <option value="Evocação" selected>Evocação</option>
                                                    <option value="Ilusão">Ilusão</option>
                                                    <option value="Necromancia">Necromancia</option>
                                                    <option value="Transmutação">Transmutação</option>
                                                    <?php
                                                } else if ($escola == "Ilusão"){
                                                    ?>
                                                    <option value="Abjuração">Abjuração</option>
                                                    <option value="Adivinhação">Adivinhação</option>
                                                    <option value="Conjuração">Conjuração</option>
                                                    <option value="Encantamento">Encantamento</option> 
                                                    <option value="Evocação">Evocação</option>
                                                    <option value="Ilusão" selected>Ilusão</option>
                                                    <option value="Necromancia">Necromancia</option>
                                                    <option value="Transmutação">Transmutação</option>
                                                    <?php
                                                } else if ($escola == "Necromancia"){
                                                    ?>
                                                    <option value="Abjuração">Abjuração</option>
                                                    <option value="Adivinhação">Adivinhação</option>
                                                    <option value="Conjuração">Conjuração</option>
                                                    <option value="Encantamento">Encantamento</option> 
                                                    <option value="Evocação">Evocação</option>
                                                    <option value="Ilusão">Ilusão</option>
                                                    <option value="Necromancia" selected>Necromancia</option>
                                                    <option value="Transmutação">Transmutação</option>
                                                    <?php
                                                }else if ($escola == "Transmutação"){
                                                    ?>
                                                    <option value="Abjuração">Abjuração</option>
                                                    <option value="Adivinhação">Adivinhação</option>
                                                    <option value="Conjuração">Conjuração</option>
                                                    <option value="Encantamento">Encantamento</option> 
                                                    <option value="Evocação">Evocação</option>
                                                    <option value="Ilusão">Ilusão</option>
                                                    <option value="Necromancia">Necromancia</option>
                                                    <option value="Transmutação" selected>Transmutação</option>
                                                    <?php
                                                }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="input">
                                        <label>Nível</label>
                                        <?php
                                        echo "<input type='text' class='nivel' name='nivel' maxlength='1' placeholder='Digite o Nível' value='$nivel'>";
                                        ?>
                                    </div>

                                    <div class="checkbox">
                                        <label>Conjurador</label>
                                        <?php
                                        if ($mago == "mago"){
                                        ?>
                                            <div><input type="checkbox" class="mago" name="mago" value="Mago" checked><label class="check" for="mago">Mago</label></div>
                                        <?php  
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="mago" name="mago" value="Mago"><label class="check" for="mago">Mago</label></div>
                                        <?php
                                        }
                                        if ($feiticeiro == "feiticeiro"){
                                        ?>
                                            <div><input type="checkbox" class="feiticeiro" name="feiticeiro" value="feiticeiro" checked><label class="check" for="feiticeiro">Feiticeiro</label></div>
                                        <?php  
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="feiticeiro" name="feiticeiro" value="feiticeiro"><label class="check" for="feiticeiro">Feiticeiro</label></div>
                                        <?php
                                        }
                                        if ($bardo == "bardo"){
                                        ?>
                                            <div><input type="checkbox" class="bardo" name="bardo" value="bardo" checked><label class="check" for="bardo">Bardo</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="bardo" name="bardo" value="bardo"><label class="check" for="bardo">Bardo</label></div>
                                        <?php
                                        }
                                        if ($paladino == "paladino"){
                                        ?>
                                            <div><input type="checkbox" class="paladino" name="paladino" value="paladino" checked><label class="check" for="paladino">Paladino</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="paladino" name="paladino" value="paladino"><label class="check" for="paladino">Paladino</label></div>
                                        <?php
                                        }
                                        if ($clerigo == "clerigo") {
                                        ?>
                                            <div><input type="checkbox" class="clerigo" name="clerigo" value="clerigo" checked><label class="check" for="clerigo">Clérigo</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="clerigo" name="clerigo" value="clerigo"><label class="check" for="clerigo">Clérigo</label></div>
                                        <?php
                                        }
                                        if ($druida == "druida"){
                                        ?>
                                            <div><input type="checkbox" class="druida" name="druida" value="druida" checked><label class="check" for="druida">Druída</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="druida" name="druida" value="druida"><label class="check" for="druida">Druída</label></div>
                                        <?php
                                        }
                                        if ($bruxo == "bruxo"){
                                        ?>
                                            <div><input type="checkbox" class="bruxo" name="bruxo" value="bruxo" checked><label class="check" for="bruxo">Bruxo</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="bruxo" name="bruxo" value="bruxo"><label class="check" for="bruxo">Bruxo</label></div>
                                        <?php
                                        }
                                        if ($patrulheiro == "patrulheiro"){
                                        ?>
                                            <div><input type="checkbox" class="patrulheiro" name="patrulheiro" value="patrulheiro" checked><label class="check" for="patrulheiro">Patrulheiro</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="patrulheiro" name="patrulheiro" value="patrulheiro"><label class="check" for="patrulheiro">Patrulheiro</label></div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="checkbox">
                                        <label>Possui Ritual?</label>
                                        <div class="flex">
                                            <?php
                                            if ($ritual == "S"){
                                                ?>
                                                    <label class="check"><input type="radio" class="ritual" name="ritual" value="S" checked>Sim</label>
                                                    <label class="check"><input type="radio" class="ritual" name="ritual" value="N">Não</label>
                                                <?php
                                            } else if ($ritual == "N"){
                                                ?>
                                                    <label class="check"><input type="radio" class="ritual" name="ritual" value="S">Sim</label>
                                                    <label class="check"><input type="radio" class="ritual" name="ritual" value="N"  checked>Não</label>
                                                <?php
                                            }
                                            ?>
                                        </div>
                                    </div>

                                    <div class="input">
                                        <label class="tdc">Tempo de Conjuração</label>
                                        <?php
                                            echo "<input type='text' class='tconjuracao' name='tconjuracao' maxlength='1' placeholder='Digite o Tempo de Conjuração'>";
                                        ?>
                                    </div>

                                    <div class="input">
                                        <label>Alcance</label>
                                        <?php
                                            echo "<input type='text' class='alcance' name='alcance' maxlength='4' placeholder='Digite o alcance' value='$alcance'>"
                                        ?>
                                    </div>

                                    <div class="checkbox">
                                        <label>Componentes</label>
                                        <?php
                                        if ($v == "V"){
                                        ?>
                                            <div><input type="checkbox" class="V" name="V" value="V" checked><label class="check" for="V">V</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="V" name="V" value="V"><label class="check" for="V">V</label></div>
                                        <?php
                                        }
                                        if ($s == "S"){
                                        ?>
                                            <div><input type="checkbox" class="S" name="S" value="S" checked><label class="check" for="S" >S</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="S" name="S" value="S"><label class="check" for="S">S</label></div>
                                        <?php
                                        }
                                        if ($m == "M"){
                                        ?>
                                            <div><input type="checkbox" class="M" name="M" value="M" checked><label class="check" for="M">M</label></div>
                                        <?php
                                        } else {
                                        ?>
                                            <div><input type="checkbox" class="M" name="M" value="M"><label class="check" for="M">M</label></div>
                                        <?php
                                        }
                                        ?>
                                    </div>

                                    <div class="input">
                                        <label>Duração</label>
                                        <?php
                                        echo "<input type='text' class='duração' name='duracao' maxlength='12' placeholder='Digite a duração' value='$duracao'>"
                                        ?>
                                    </div>

                                    <div class="textarea">
                                        <label>Descrição da Magia</label>
                                        <?php
                                        echo "<textarea class='desc' name='desc' maxlength='500' placeholder='Digite a Descrição da Magia' value='$desc'></textarea>"
                                        ?>
                                    </div>

                                    <div class="textarea">
                                        <label>Descrição em Níveis Superiores</label>
                                        <?php
                                        echo "<textarea class='desclvl' name='desclvl' maxlength='500' placeholder='Digite a Descrição em Níveis Superiores' value='$desclvl'></textarea>"
                                        ?>
                                    </div>

                                    <div class="botoes">
                                        <input type="submit" value="Confirme" class="button">
                                        <a href="pag_princi.php" class="button dois">Voltar</a>
                                    </div>
                                </form>
                            <?php
                        }
                    }

                }
            ?>
    </body>
</html>