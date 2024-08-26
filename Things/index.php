<!DOCTYPE html>

<html lang="pt-br">

<head>
    <link rel="stylesheet" href="./slick-1.8.1/slick/slick.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="shortcut icon" type="image-x/png" href="./img/icon-car.ico">
    <script src="https://kit.fontawesome.com/b012029234.js" crossorigin="anonymous"></script>
    <title>Projeto 05 - Home</title>
</head>

<body>
    <header>
        <div class="center">
            <div class="logo">
                <img src="./img/logo.jpg" alt="logo da empresa">
            </div>
            <!--logo-->
            <nav class="desktop">
                <ul>
                    <li><a href="home">HOME</a></li>
                    <li><a href="venda">VENDA</a></li>
                    <li><a href="galeria">GALERIA</a></li>
                    <li><a href="eventos">EVENTOS</a></li>
                    <li><a href="sobre-nos">SOBRE NÓS</a></li>
                    <li><a access="denied" id="contatoLink" onclick="checkAccess()" href="">CONTATO</a></li>
                </ul>
            </nav>
            <!--desktop-->
            <nav class="mobile">
                <i id="bars" class="fa-solid fa-2xl fa-bars"></i>
                <ul id="mobile">
                    <li><a class="grow" href="home"><i class="fa-solid fa-house fa-2xl"></i><span>HOME</span></a></li>
                    <li><a class="grow" href="venda"><i
                                class="fa-solid fa-basket-shopping fa-2xl"></i><span>VENDA</span></a></li>
                    <li><a class="grow" href="galeria"><i class="fa-solid fa-images fa-2xl"></i><span>GALERIA</span></a>
                    </li>
                    <li><a class="grow" href="eventos"><i
                                class="fa-solid fa-champagne-glasses fa-2xl"></i><span>EVENTOS</span></a></li>
                    <li><a class="grow" href="sobre-nos"><i class="fa-solid fa-people-group fa-2xl"></i><span>SOBRE
                                NÓS</span></a></li>
                    <li><a class="grow" goTo="contato" href=""><i
                                class="fa-solid fa-phone fa-2xl"></i><span>CONTATO</span></a></li>
                    <li><a id="close" title="fechar" href="#"><i id="btn_close"
                                class="fa-solid fa-xmark fa-2xl"></i></a></li>
                </ul>
            </nav>
            <!--mobile-->
        </div>
        <!--center-->
    </header>
    <!--header-->
    <?php

    if(isset($_GET['url'])) {
        if(file_exists($_GET['url']).'.html') {
            include($_GET['url'].'.html');
        } else {
            include('404.html');
        };
    } else {
        include('index.html');
    };
?>
    <footer>
        <div class="center">
            <nav>
                <ul>
                    <li><a href="home">HOME</a></li>
                    <li><a href="venda">VENDA</a></li>
                    <li><a href="galeria">GALERIA</a></li>
                    <li><a href="eventos">EVENTOS</a></li>
                    <li><a href="sobre-nos">SOBRE NÓS</a></li>
                    <li><a access="denied" id="contatoLink2" onclick="checkAccess()" href="">CONTATO</a></li>
                </ul>
            </nav>
            <!--nav-->
            <p>Todos os direitos reservados a <strong>RM Veículos Especiais</strong></p>
        </div>
        <!--center-->
    </footer>
    <!--footer-->
    <script src="./jquery/jquery-3.6.4.min.js"></script>
    <script src="./slick-1.8.1/slick/slick.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>