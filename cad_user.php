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

            <form class="form">
                <label>Nome:</label>
                <input type="text" maxlength="64" placeholder="Digite seu Nome">
                    
                <label>Email:</label>
                <input type="email" maxlength="64" placeholder="Digite seu Email:">

                <label>Data de Nascimento:</label>
                <input type="date">

                <label>Senha:</label>
                <input type="password" maxlength="16" placeholder="Crie uma senha:">

                <label>Confirme sua Senha:</label>
                <input type="password" maxlength="16" placeholder="Crie uma senha:">

                <input type="submit" value="Confirme" class="button">
                <a href="index.php" class="button">Voltar</a>
            </form>
        </div>
    </body>
</html>