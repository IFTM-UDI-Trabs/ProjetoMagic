<?php

    session_start();

    include ("funcoes.php");
    
    $op = @ $_REQUEST['op'];

    if (!isset($op))
    {
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

        <link rel="stylesheet" type="text/css" href="css/cad_user.css">
    </head>

    <body>

        <?php
            if ($op == 0){
        ?>

        <div class="princ">
            <img src="logo.png" class="logo">

            <form class="form" action="?op=1" method="POST">

                <div class="input">
                    <label>Email</label>
                    <input type="email" class="email" name="email" maxlength="64" placeholder="Digite seu Email:">
                </div>

                <div class="input">
                    <label>Senha</label>
                    <input type="password" class="senha" name="senha" minlength="6" maxlength="16" placeholder="Crie uma senha:">
                </div>

                <div class="botoes">
                    <input type="submit" value="Confirmar" class="button">
                    <a href="index.php" class="button dois">Voltar</a>
                </div>
            </form>
        </div>
        <?php
    }

             if ($op == 1)
                {
                    $email = @ trim($_REQUEST['email']);
                    $senha = @ trim($_REQUEST['senha']);

                    $erro = false;
                    $mensagem = "";
                    
                    //Caso EMAIL esteja vazio
                    if ($email == "")
                    {
                        $erro = true;
                        $mensagem = $mensagem."Digite seu e-mail para realizar o login!.\\n";
                    }

                    //Caso SENHA esteja vazia
                    if ($senha == "")
                    {
                        $erro = true;
                        $mensagem = $mensagem."Digite sua senha para efetuar o login!.\\n";
                    }

                    if ($erro == true)
                    {
                        mensagem($mensagem);

                        ?>

                        <div class = "princ">
                            <img src="logo.png" class="logo">

                            <form class="form" action="?op=1" method="POST">

                                <div class="input">
                                    <label>Email</label>
                                    <?php
                                        echo "<input type='email' class='email' value='$email' name='email' maxlength='64' placeholder='Digite seu Email:'>"
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Senha</label>
                                    <?php
                                        echo "<input type='password' class='senha' value='$senha' name='senha' maxlength='16' placeholder='Crie uma senha:'>"
                                    ?>
                                </div>

                                <div class="botoes">
                                    <input type="submit" value="Confirme" class="button">
                                    <a href="index.php" class="button dois">Voltar</a>
                                </div>
                            </form>
                        </div>

                        <?php
                    }

                    //Fazendo a conexão
                    else
                    {
                        $conexao = conecta();

                        if ($conexao)
                        {
                            $texto_sql = "SELECT * FROM cad_user WHERE email='$email' AND senha='$senha'";
                            $resultado = mysqli_query($conexao,$texto_sql);
                            $quantidade_registros = mysqli_num_rows($resultado);
                            $mensagem = "";
                            $erro = false;

                            if ($quantidade_registros != 0)
                            {
                                while ($linha = mysqli_fetch_array($resultado)){
                                    $nome = $linha['nome'];
                                }
                                $erro = false;
                                $_SESSION['nome'] = $nome;
                                trocaPagina("pag_princi.php");
                            }
                            else
                            {
                                $erro = true;
                                mensagem("E-mail ou senha não cadastrados!");
                                ?>

                                  <div class = "princ">
                            <img src="logo.png" class="logo">

                            <form class="form" action="?op=1" method="POST">

                                <div class="input">
                                    <label>Email</label>
                                    <?php
                                        echo "<input type='email' class='email' value='$email' name='email' maxlength='64' placeholder='Digite seu Email:'>"
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Senha</label>
                                    <?php
                                        echo "<input type='password' class='senha' value='$senha' name='senha' maxlength='16' placeholder='Crie uma senha:'>"
                                    ?>
                                </div>

                                <div class="botoes">
                                    <input type="submit" value="Confirme" class="button">
                                    <a href="index.php" class="button dois">Voltar</a>
                                </div>
                            </form>
                        </div>  

                                <?php
                            }

                            if ($erro == true)
                            {
                                echo "<script type=\"text/javascript\" language=\"javascript\">";
   					            echo "alert(\"$mensagem\");";
   					            echo "</script>";
                            }
                            
                        }
                    }
                }
                ?>
    </body>
</html>