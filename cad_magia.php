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
                    <input type="text" class="nivel" name="nivel" maxlength="1" placeholder="Digite o Nível">
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

                <div class="input">
                    <label class="tdc">Tempo de Connjuração</label>
                    <input type="text" class="nivel" name="nivel" maxlength="1" placeholder="Digite o Tempo de Conjuração">
                </div>

                <div class="input">
                    <label>Alcance</label>
                    <input type="text" class="alcance" name="alcance" maxlength="4" placeholder="Digite o alcance">
                </div>

                <div class="checkbox">
                    <label>Conjurador</label>
                    <div><input type="checkbox" class="V" name="V" value="V"><label class="check" for="V">V</label></div>
                    <div><input type="checkbox" class="S" name="S" value="S"><label class="check" for="S">S</label></div>
                    <div><input type="checkbox" class="M" name="M" value="M"><label class="check" for="M">M</label></div>
                </div>

                <div class="input">
                    <label>Duração</label>
                    <input type="text" class="duração" name="duração" maxlength="12" placeholder="Digite a duração">
                </div>

                <div class="textarea">
                    <label>Descrição da Magia</label>
                    <textarea class="duração" name="duração" maxlength="500" placeholder="Digite a Descrição da Magia"></textarea>
                </div>

                <div class="textarea">
                    <label>Descrição em Níveis Superiores</label>
                    <textarea class="duração" name="duração" maxlength="500" placeholder="Digite a Descrição em Níveis Superiores"></textarea>
                </div>

                <div class="botoes">
                    <input type="submit" value="Confirme" class="button">
                    <a href="pag_princi.php" class="button dois">Voltar</a>
                </div>
            </form>
        </div>
        <?php
    }

                if ($op == 1)
                {
                    $nome = @ trim($_REQUEST['nome']);
                    $email = @ trim($_REQUEST['email']);
                    $data_nascimento = @ trim($_REQUEST['data_nascimento']);
                    $senha = @ trim($_REQUEST['senha']);
                    $confirma_senha = @ trim($_REQUEST['confirma_senha']);

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

                    //Verificando SENHA e CONTRA SENHA
                    if ($senha == ""){
                        $erro = true;
                        $mensagem = $mensagem."O Campo Senha não pode estar vazio!";
                    }
                    else if ($confirma_senha != $senha)
                    {
                        $erro = true;
                        $mensagem = $mensagem."O campo de Confirmação de Senha e a Senha não conferem";
                    }

                    //Verificando se ERRO = TRUE
                    if ($erro == true)
                    {
                        mensagem($mensagem);

                        ?>

                        <div class="princ">
                            <img src="img/logo.png" class="logo">

                            <form class="form" action="?op=1" method="POST">
                                <div class="input">
                                    <label>Nome</label>
                                    <?php
                                        echo "<input type='text' class='nome' value='$nome' name='nome' maxlength='64' placeholder='Digite seu Nome'>"
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Email</label>
                                    <?php
                                        echo "<input type='email' class='email' value='$email' name='email' maxlength='64' placeholder='Digite seu Email:'>"
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Data de Nascimento</label>
                                    <?php
                                        echo "<input type='date' value='$data_nascimento' class='data' name='data_nascimento'>"
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Senha</label>
                                    <?php
                                        echo "<input type='password' class='senha' value='$senha' name='senha' maxlength='16' placeholder='Crie uma senha:'>"
                                    ?>
                                </div>

                                <div class="input">
                                    <label>Confirme sua Senha</label>
                                    <?php
                                        echo "<input type='password' class='confirm' value='$confirma_senha' name='confirma_senha' maxlength='16'placeholder='Crie uma senha:'>"
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
                            $texto_sql = "SELECT * FROM cad_user WHERE email='$email'";
                            $resultado = mysqli_query($conexao,$texto_sql);
                            $quantidade_registros = mysqli_num_rows($resultado);
                            $mensagem = "";
                            $erro = false;

                            if ($quantidade_registros != 0)
                            {
                                $erro = true;
                                $mensagem = $mensagem."O e-mail inserido já foi cadastrado!.\\n";
                            }

                            if ($erro == true)
                            {
                                echo "<script type=\"text/javascript\" language=\"javascript\">";
   					            echo "alert(\"$mensagem\");";
                                echo "</script>";
                                
                                ?>

                                    <div class="princ">
                                        <img src="img/logo.png" class="logo">

                                        <form class="form" action="?op=1" method="POST">
                                            <div class="input">
                                                <label>Nome</label>
                                                <?php
                                                    echo "<input type='text' class='nome' value='$nome' name='nome' maxlength='64' placeholder='Digite seu Nome'>"
                                                ?>
                                            </div>

                                            <div class="input">
                                                <label>Email</label>
                                                <?php
                                                    echo "<input type='email' class='email' value='$email' name='email' maxlength='64' placeholder='Digite seu Email:'>"
                                                ?>
                                            </div>

                                            <div class="input">
                                                <label>Data de Nascimento</label>
                                                <?php
                                                    echo "<input type='date' value='$data_nascimento' class='data' name='data_nascimento'>"
                                                ?>
                                            </div>

                                            <div class="input">
                                                <label>Senha</label>
                                                <?php
                                                    echo "<input type='password' class='senha' value='$senha' name='senha' maxlength='16' placeholder='Crie uma senha:'>"
                                                ?>
                                            </div>

                                            <div class="input">
                                                <label>Confirme sua Senha</label>
                                                <?php
                                                    echo "<input type='password' class='confirm' value='$confirma_senha' name='confirma_senha' maxlength='16'placeholder='Crie uma senha:'>"
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
                            else
                            {
                                $texto_sql = "INSERT INTO cad_user (nome, data_nascimento, email, senha) VALUES ('$nome', '$data_nascimento', '$email', '$senha')";

                                $resultado = mysqli_query($conexao,$texto_sql);
                            
                                if ($resultado > 0){
                                    mensagem("Dados enviados com sucesso!");

                                    $_SESSION['nome'] = $nome;

                                    trocaPagina('pag_princi.php');
                                    
                                }
                                else{
                                    mensagem("Ocorreu um erro ao enviar os dados, tente novamente.");
                                }
                            }
                        }
                    }


                }


            ?>
    </body>
</html>