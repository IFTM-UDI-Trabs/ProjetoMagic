<?php
    session_start();
    $nome = $_SESSION['nome'];

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

        <link rel="stylesheet" type="text/css" href="pag_princi.css">
    </head>
    <body>
        <div class="menuLateral">

            <div class="perfil">
                <?php
                    if ($op == 0){
                        ?>
                            <img class="img" src="vetorum.png">
                        <?php
                    } else if ($op == 1){
                        ?>
                            <img class="img" src="vetordois.png">
                        <?php
                    } else {
                        ?>
                            <img class="img" src="vetortres.png">
                        <?php
                    }
                ?>
                <h2 class="bv">Bem Vindo <?php echo"$nome"?></h2>
            </div>
            <div class="opcoes">
                <ul class="lista">
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

            

            <?php
        }
    ?>

    </body>
</html>