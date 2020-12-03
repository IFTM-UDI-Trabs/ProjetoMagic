<html>
    <head>
        <title>Projeto Magic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header class="menu">
            <a href="#"><img src="logo.png" class="logo"></a>
            <ul>
                <li class="item"><a href="#banner">Home</a></li>
                <li class="item"><a href="#rpg">O que é RPG?</a></li>
                <li class="item"><a href="">Objetivo</a></li>
                <li class="item"><a href="">Criadores</a></li>
                <li class="item"><a href="">Login</a></li>
            </ul>
        </header>
        <div id="banner" class="banner">
            <img src="logo.png">
            <div class="texto">
                <h1>Projeto Magic</h1>
                <p class="txt">Nós, Douglas Stuhler Pinheiro e Murilo Silva Reis, desenvolveremos um site que funcionará praticamente como uma rede social, porém com assuntos específicos voltados para RPG, do inglês: “Role Play Games” ou Jogo de Interpretação. O RPG é um estilo de jogo de mesa muito conhecido atualmente, e possui vários estilos e regras diferentes, para o site utilizaremos o conjunto de regras conhecido como “D&D” ou “Dungeons & Dragons”.</p>
                <p class="txt">O site funcionará através da interação entre os usuários, onde uma pessoa posta, especificamente, sobre uma magia do universo de D&D, e outras pessoas poderão reagir, assim como funciona o Facebook com os “Likes”. Cada usuário terá o seu acesso exclusivo, que funcionará através de nome de usuário e senha.</p>
            </div>
        </div>
        <div id="rpg" class="azul">
            <img src="logo.png">
            <div class="texto">
                <h1>Projeto Magic</h1>
                <p class="txt">Nós, Douglas Stuhler Pinheiro e Murilo Silva Reis, desenvolveremos um site que funcionará praticamente como uma rede social, porém com assuntos específicos voltados para RPG, do inglês: “Role Play Games” ou Jogo de Interpretação. O RPG é um estilo de jogo de mesa muito conhecido atualmente, e possui vários estilos e regras diferentes, para o site utilizaremos o conjunto de regras conhecido como “D&D” ou “Dungeons & Dragons”.</p>
                <p class="txt">O site funcionará através da interação entre os usuários, onde uma pessoa posta, especificamente, sobre uma magia do universo de D&D, e outras pessoas poderão reagir, assim como funciona o Facebook com os “Likes”. Cada usuário terá o seu acesso exclusivo, que funcionará através de nome de usuário e senha.</p>
            </div>
        </div>
        <div class="princ">
            
        </div>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){

            $("a").on('click', function(event) {
                if (this.hash !== "") {

                    event.preventDefault();
                    
                    var hash = this.hash;

                    if (hash != "banner"){
                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 800, function(){
                            window.location.hash = hash;
                        });
                    } else {
                        $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                    }
                } // End if
            });
            });
    </script>
</html>