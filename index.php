<?php 
$arquivo = file("dados.txt");
$sobrenome = $arquivo[1];
$sobrenome_maiusc = strtoupper($sobrenome);
?>

<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio - Beatriz</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined" rel="stylesheet" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libertinus+Serif:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/1515a54f92.js" crossorigin="anonymous"></script>
</head>

<body>
    <header class="header">
        <div class="containerHeader">
            <div class="flex">
                <nav>
                    <ul>
                        <li><a class="titulos" onclick="scrollWin()"><i class="fa-regular fa-house"></i></a></li>
                        <li><a class="titulos" onclick="scrollWin2()"><?php echo $arquivo[4]; ?></a></li>
                        <li><a class="titulos" onclick="scrollWin3()">Interesses</a></li>
                        <li><a class="titulos" onclick="scrollWin4()">Contato</a></li>
                    </ul>
                </nav>
            </div><!--flex-->
        </div><!--container-->
    </header>

    <section class="banner">
        <h1><?php echo strtoupper($arquivo[0]); ?> <span><?php echo $sobrenome_maiusc;?></span></h1>
    </section>

    

    <section class="sobre_mim">
            <div class="texto_sm">
            <h1 class="txtbanner2"><p><?php echo $arquivo[0] . " " . $arquivo[2];?></p></h1>
            <p><?php echo $arquivo[5]; ?></p>
        <div class="redes">
            <div class="minirede"><a href="https://www.instagram.com/bia.dlk" target="_blank" ><i class="fa-brands fa-instagram"></i></a></div>
            <div class="minirede"><a href="https://github.com/biaabgs" target="_blank" ><i class="fa-brands fa-github"></i></a></div>
            <div class="minirede"><a href="https://www.linkedin.com/" target="_blank" ><i class="fa-brands fa-linkedin"></i></a></div>
        </div>
    </div>
        <div class="img_sm">
            <img src="foto_sm.jpg" alt="minifigure">
        </div>

    </section>

    <section class="interesses">
        <div class="comum">
            <h1 class="titulo"><?php echo strtoupper($arquivo[7]);?></h1>
            <div class="flex_interesses">
                <div class="interesses-box"><a onclick="scrollWin5()">
                        <i class="material-symbols-outlined">computer</i>
                        <h3><?php echo $arquivo[8]; ?></h3>
                        <p><?php echo $arquivo[9]; ?></p>
                </div><!--interesses-box--></a>

                <div class="interesses-box">
                    <i class="material-symbols-outlined">photo_camera</i>
                    <h3><?php echo $arquivo[11]; ?></h3>
                    <p><?php echo $arquivo[12]; ?></p>
                </div><!--interesses-box-->

                <div class="interesses-box">
                    <i class="material-symbols-outlined">sports_volleyball</i>
                    <h3><?php echo $arquivo[14]; ?></h3>
                    <p><?php echo $arquivo[15]; ?></p>
                </div><!--interesses-box-->
            </div><!--flex-->
        </div><!--comum-->
    </section><!--interesses-->



    <section class="portfolio">
        <h1 class="titulo_portfolio"><?php echo strtoupper($arquivo[17]); ?></h1>

        <!-- Chef Dreams (direita) -->
        <div class="portfolio_cd">
            <div class="imgprojeto">
                <img src="chefe_dreams/logo.png" alt="">
            </div>
            <div class="texto_cd">
                <h1><?php echo $arquivo[18]; ?></h1>
                <p><?php echo $arquivo[19]; ?></p>
                <div class="button"><a href="chefe_dreams/inicial.html">Ver site</a></div>
            </div>
        </div>

        <!-- Otomo (esquerda) -->
        <div class="portfolio_otomo">

            <div class="img_otomo">
                <img src="OtomoRestaurante/OtomoRestaurante-main/logo.png" alt="Otomo Restaurante">
            </div><!--img_portfolio-->

            <div class="texto_otomo">
                <h1><?php echo $arquivo[21]; ?></h1>
                <p><?php echo $arquivo[22]; ?></p>
                <div class="button"><a href="OtomoRestaurante/OtomoRestaurante-main/index.html">Ver site</a></div>

            </div><!--texto_otomo-->
        </div><!--portfolio_otomo-->

        

    </section><!--portfolio-->

    <section class="fotografia">
        <h1><?php echo strtoupper($arquivo[24]); ?></h1>
        <div class="comum">
            
            <div class="container_fotografia">
                    <div class="fotos1">
                        <img src="foto1.jpg" alt="Foto 1">
                    </div>
                    <div class="fotos1">
                        <img src="foto2.jpg" alt="Foto 2">
                    </div>
                    <div class="fotos1">
                        <img src="foto3.jpg" alt="Foto 3">
                    </div>
            </div><!-- container_fotografia -->
            <div class="container_fotografia">
                <div class="fotos2">
                    <img src="foto4.jpg" alt="Foto 4">
                </div>
                <div class="fotos2">
                    <img src="foto5.jpg" alt="Foto 5">
                </div>
                </div><!-- fotos -->
            </div><!-- container_fotografia -->
            <div class="container_fotografia">
                    <div class="fotos1">
                        <img src="foto6.PNG" alt="Foto 6">
                    </div>
                    <div class="fotos1">
                        <img src="foto7.jpeg" alt="Foto 7">
                    </div>
                    <div class="fotos1">
                        <img src="foto8.jpg" alt="Foto 8">
                    </div>
            </div><!-- container_fotografia -->
            <div class="container_fotografia">
                <div class="fotos2">
                    <img src="foto9.jpg" alt="Foto 9">
                </div>
                <div class="fotos2">
                    <img src="foto10.jpg" alt="Foto 10">
                </div>
                </div><!-- fotos -->
            </div><!-- container_fotografia -->
        </div><!-- comum -->
    </section>

    <script src="script.js"></script>
</body>

</html>