<html>
    <head>
        <title>Projeto Magic</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/index.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    </head>
    <body>
        <header class="menu">
            <a href="#"><img src="img/logo.png" class="logo"></a>
            <ul>
                <li class="item"><a href="#banner">Home</a></li>
                <li class="item"><a href="#rpg" class="rpg">O que é<br>RPG?</a></li>
                <li class="item"><a href="#objetivos">Objetivo</a></li>
                <li class="item"><a href="#criadores">Criadores</a></li>
                <li class="item"><a href="cad_user.php">Cadastrar</a></li>
                <li class="item"><a href="login.php">Login</a></li>
            </ul>
        </header>
        <div id="banner" class="banner">
            <img src="img/logo.png" class="img">
            <div class="texto">
                <h1>Projeto Magic</h1>
                <p class="txt">Nós, Douglas Stuhler Pinheiro e Murilo Silva Reis, desenvolveremos um site que funcionará praticamente como uma rede social, porém com assuntos específicos voltados para RPG, do inglês: “Role Play Games” ou Jogo de Interpretação. O RPG é um estilo de jogo de mesa muito conhecido atualmente, e possui vários estilos e regras diferentes, para o site utilizaremos o conjunto de regras conhecido como “D&D” ou “Dungeons & Dragons”.</p>
                <p class="txt">O site funcionará através da interação entre os usuários, onde uma pessoa posta, especificamente, sobre uma magia do universo de D&D, e outras pessoas poderão reagir, assim como funciona o Facebook com os “Likes”. Cada usuário terá o seu acesso exclusivo, que funcionará através de nome de usuário e senha.</p>
            </div>
        </div>
        <div id="rpg" class="azul">
            <div class="prim_txt">
                <div class="texto">
                    <h1>O que é RPG?</h1>
                    <p class="txt_azul">Role-Playing game, também conhecido como, RPG é um estilo de jogo em que os jogadores interpretam papéis de personagens, criando narrativas colaborativamente. O desenvolvimento do jogo depende puramente de um sistema de regras predeterminado, mas muitas vezes os jogadores preferem improvisar livremente.</p>
                    <p class="txt">Para esse site, o sistema de regras que utilizaremos como base é o tão aclamado “Dungeons & Dragons”, que se passa em um mundo de alta fantasia medieval onde existem criaturas épicas, heróis lendários, elfos, anões, gnomos, magos, guerreiros, monstros, e claro… Magia!</p>
                </div>
                <img src="img/ded.png" class="ded">
            </div>
            <div class="seg_txt">
                <p class="txt">O universo de Dungeons & Dragons é muito completo e cheio de histórias para contar, suas regras incluem classes e raças diferentes, proporcionando aventuras incríveis para os jogadores. Muitas vezes, para regrar esse sistema, são utilizados dados, de diferentes tamanhos e formas, que de certa maneira são a “marca” do RPG, o mais famoso deles é o D20, o dado de 20 lados.</p>
            </div>
        </div>
        <div id="objetivos" class="objetivos">
            <img src="img/objetivo.png" class="obj">
            <div class="texto">
                <h1>Objetivos</h1>
                <p class="txt">Nossa intenção com este site é dar um “empurrãozinho” para aquelas pessoas que estão começando a se relacionar com o RPG, dando uma melhor introdução às magias, que é um sistema bem complexo no universo de Dungeons & Dragons, principalmente para aqueles que estão iniciando. Isso tudo, claro, com a ajuda de outras pessoas, que estarão interagindo com o site.</p>
            </div>
        </div>
        <div id="criadores" class="criadores">
            <div class="texto">
                <h1>Criadores</h1>
                <p class="txt">Novamente, nós, Douglas Stuhler Pinheiro e Murilo Silva Reis, somos estudantes do Instituto Federal do Triângulo Mineiro Campus Uberlândia, e fazemos o curso Técnico em Manutenção e Suporte em Informática. Tivemos a ideia de construir este site através de um projeto desenvolvido pelo professor Carlos Alberto Lopes. Também fazemos parte da comunidade de RPG, e por isso decidimos juntar os dois universos: O da programação com o da fantasia.</p>
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