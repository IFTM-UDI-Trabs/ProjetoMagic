<html>
    <head>
        <title>Projeto Magic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="index.css">
    </head>
    <body>
        <div class="princ">
            <img src="logo.png" class="logo">

            <form class="form" action="cad.php">
                <div class="input">
                    <label>Nome</label>
                    <input type="text" class="nome" name="nome" maxlength="64" placeholder="Digite seu Nome">
                </div>

                <div class="input">
                    <label>Email</label>
                    <input type="email" class="email" name="email" maxlength="64" placeholder="Digite seu Email:">
                </div>

                <div class="input">
                    <label>Data de Nascimento</label>
                    <input type="date" class="data" name="data_nascimento">
                </div>

                <div class="input">
                    <label>Senha</label>
                    <input type="password" class="senha" name="senha" maxlength="16" placeholder="Crie uma senha:">
                </div>

                <div class="input">
                    <label>Confirme sua Senha</label>
                    <input type="password" class="confirm" name="confirma_senha" maxlength="16" placeholder="Crie uma senha:">
                </div>

                <div class="botoes">
                    <input type="submit" value="Confirme" class="button">
                    <a href="index.php" class="button">Voltar</a>
                </div>
            </form>

            <?php

                include ("funcoes.php");

                $op = @ $_REQUEST['op'];

                if (!isset($op))
                {
                    $op = 0;
                }

                if ($op == 1)
                {
                    $nome = @trim($_REQUEST['nome']);
                    $email = @trim($_REQUEST['email']);
                    $data_nascimento = @trim($_REQUEST['data_nascimento']);
                    $senha = @trim($_REQUEST['senha']);
                    $confirma_senha = @trim($REQUEST['confirma_senha']);

                    $erro = false;
                    $mensagem = "";

                    //Caso NOME esteja vazio
                    if ($nome == "")
                    {
                        $erro = true;
                        $mensagem = $mensagem."Por favor, preencha o campo nome.\\n";
                    }

                    //Caso DATA esteja vazia
                    if (substr($data_nascimento, 0, 1) == "d")
                    {
                        $erro = true;
                        $mensagem = $mensagem."Por favor, preencha o dia no campo data.\\n";
                    }

                    else if (substr($data_nascimento, 3,1) == "m")
                    {
                        $erro = true;
                        $mensagem = $mensagem."Por favor, preencha o mês no campo data.\\n";
                    }

                    else if (substr($data_nascimento, 6, 1) == "a")
                    {
                        $erro = true;
                        $mensagem = $mensagem."Por favor, preencha o ano no campo data.\\n";
                    }
                    
                    //Caso EMAIL esteja vazio
                    if ($email == "")
                    {
                        $erro = true;
                        $mensagem = $mensagem."Por favor, preencha o campo email.\\n";
                    }

                    //Validando o EMAIL
                    else if (filter_var($email,FILTER_VALIDATE_EMAIL))
                    {
                        list($usuario, $provedor) = explode('@', $email);

                        if (!checkdnsrr($provedor, 'MX') == 1)
                        {
                            $erro = true;
                            $mensagem = $mensagem."Por favor, digite um e-mail válido.\\n";
                        }
                    }

                    else
                    {
                        $erro = true;
                        $mensagem = $mensagem."Por favor, digite um e-mail válido.\\n";
                    }

                    //Verificando SENHA e CONTRA SENHA
                    if ($confirma_senha != $senha)
                    {
                        $erro = true;
                        $mensagem = $mensagem."O campo de Confirmação de Senha e a Senha não conferem";
                    }

                    //Verificando se ERRO = TRUE
                    if ($erro == true)
                    {
                        echo "<script type=\"text/javascript\" language=\"javascript\">";
                        echo "alert(\"mensagem\");";
                        echo "</script>";
                    }

                    //Fazendo a conexão
                    else
                    {
                        $conexao = conecta();

                        if ($conexao)
                        {
                            
                        }
                    }


                }


            ?>
        </div>
    </body>
</html>