<?php 
$arquivo = file("dados.txt");
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
                        <li><a class="titulos" onclick="sobreMim()"><?php echo $arquivo[4]; ?></a></li>
                        <li><a class="titulos" onclick="interesses()">Interesses</a></li>
                        <li><a class="titulos" onclick="contato()">Contato</a></li>
                    </ul>
                </nav>
            </div><!--flex-->
        </div><!--container-->
    </header>

    <section class="banner">
        <h1><?php echo strtoupper($arquivo[0]); ?> <span><?php echo strtoupper($arquivo[1]) ;?></span></h1>
        <p> Full-stack | Programção | Engenharia | Fotógrafa </p>
    </section>

    

    <section class="sobre_mim" id="sobre_mim">
            <div class="texto_sm">
            <h1><p><?php echo $arquivo[0] . " " . $arquivo[2];?></p></h1>
            <p><?php echo $arquivo[5]; ?></p>
        <div class="redes">
            <div class="minirede"><i class="fa-brands fa-html5"></i></i></div>
            <div class="minirede"><i class="fa-brands fa-css3-alt"></i></div>
            <div class="minirede"><i class="fa-brands fa-square-js"></i></div>
            <div class="minirede"><i class="fa-brands fa-php"></i></div>            
        </div>
    </div>
        <div class="img_sm"  >
            <img src="<?php echo $arquivo[36]; ?>" alt="minifigure">
        </div>

    </section>
        <div id="interesses"></div>
    <section class="interesses">
        <div class="comum">
            <h1 class="titulo"><?php echo strtoupper($arquivo[7]);?></h1>
            <div class="flex_interesses">
                <div class="interesses-box"><a onclick="projetos()">
                        <i class="material-symbols-outlined">computer</i>
                        <h3><?php echo $arquivo[8]; ?></h3>
                        <p><?php echo $arquivo[9]; ?></p>
                </div><!--interesses-box--></a>

                <div class="interesses-box"><a onclick="fotografia()">
                    <i class="material-symbols-outlined">photo_camera</i>
                    <h3><?php echo $arquivo[11]; ?></h3>
                    <p><?php echo $arquivo[12]; ?></p>
                </div><!--interesses-box--></a>

                <div class="interesses-box">
                    <i class="material-symbols-outlined">sports_volleyball</i>
                    <h3><?php echo $arquivo[14]; ?></h3>
                    <p><?php echo $arquivo[15]; ?></p>
                </div><!--interesses-box-->
            </div><!--flex-->
        </div><!--comum-->
    </section><!--interesses-->



    <section class="portfolio" id="portfolio">
        <h1 class="titulo_portfolio"><?php echo strtoupper($arquivo[17]); ?></h1>

        <!-- Otomo (esquerda) -->
        <div class="portfolio_otomo">

            <div class="img_otomo">
                <img src="OtomoRestaurante/OtomoRestaurante-main/logo.png" alt="Otomo Restaurante">
            </div><!--img_portfolio-->

            <div class="texto_otomo">
                <h1><?php echo $arquivo[21]; ?></h1>
                <p><?php echo $arquivo[22]; ?></p>
                <div class="button"><a href="OtomoRestaurante/OtomoRestaurante-main/index.html" target="_blank">Ver site</a></div>

            </div><!--texto_otomo-->
        </div><!--portfolio_otomo-->

        <!-- Chef Dreams (direita) -->
        <div class="portfolio_cd">
            <div class="imgprojeto">
                <img src="chefe_dreams/logo.png" alt="">
            </div>
            <div class="texto_cd">
                <h1><?php echo $arquivo[18]; ?></h1>
                <p><?php echo $arquivo[19]; ?></p>
                <div class="button"><a href="chefe_dreams/inicial.html" target="_blank">Ver site</a></div>
            </div>
        </div>

    </section><!--portfolio-->

    <section class="fotografia" id="fotografia">
        <h1><?php echo strtoupper($arquivo[24]); ?></h1>
        <div class="comum">
            
            <div class="container_fotografia">
                    <div class="fotos1">
                        <img src="<?php echo $arquivo[25]; ?>" alt="Foto 1">
                    </div>
                    <div class="fotos1">
                        <img src="<?php echo $arquivo[26]; ?>" alt="Foto 2">
                    </div>
                    <div class="fotos1">
                        <img src="<?php echo $arquivo[27]; ?>" alt="Foto 3">
                    </div>
            </div><!-- container_fotografia -->
            <div class="container_fotografia">
                <div class="fotos2">
                    <img src="<?php echo $arquivo[28]; ?>" alt="Foto 4">
                </div>
                <div class="fotos2">
                    <img src="<?php echo $arquivo[29]; ?>" alt="Foto 5">
                </div>
                </div><!-- fotos -->
            </div><!-- container_fotografia -->
            <div class="container_fotografia">
                    <div class="fotos1">
                        <img src="<?php echo $arquivo[30]; ?>" alt="Foto 6">
                    </div>
                    <div class="fotos1">
                        <img src="<?php echo $arquivo[31]; ?>" alt="Foto 7">
                    </div>
                    <div class="fotos1">
                        <img src="<?php echo $arquivo[32]; ?>" alt="Foto 8">
                    </div>
            </div><!-- container_fotografia -->
            <div class="container_fotografia">
                <div class="fotos2">
                    <img src="<?php echo $arquivo[33]; ?>" alt="Foto 9">
                </div>
                <div class="fotos2">
                    <img src="<?php echo $arquivo[34]; ?>" alt="Foto 10">
                </div>
                </div><!-- fotos -->
            </div><!-- container_fotografia -->
        </div><!-- comum -->
    </section>

    <script src="script.js"></script>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    echo "<p style='color:#55362a; text-align:center;'>Mensagem enviada com sucesso! Obrigado, $nome.</p>";
}
?>

    <section class="contato" id="contato">
        <div class="container_contato">
            <h1><?php echo $arquivo[38]; ?></h1>
        <form method="POST" class="form_contato">
            <input type="text" name="nome" placeholder="Seu nome" required class="nome">
            <div class="comunicacao">
            <input type="email" name="email" placeholder="Seu e-mail" required class="email">
            <input type="tel" name="email" placeholder="Seu telefone" required class="tel">
            </div>
            <textarea name="mensagem" placeholder="Sua mensagem" rows="4" required class="mensagem"></textarea>
            <button type="submit">Enviar</button>
        </form>
        </div>
    </section>

    <footer class="footer"> 
    <div class="flexbox"><!--flexbox-->
    <h1>Contato</h1>
    <h2 >goncalvesdasilvabia@gmail.com</h2>
    <h2>(55) 11 00000-0000</h2>
    <div class="footerredes">
        <nav>
        <div class="rede_footer"><a href="https://www.instagram.com" target="_blank" ><i class="fa-brands fa-instagram"></i></a>
        <a href="https://github.com" target="_blank" ><i class="fa-brands fa-github"></i></a>
        <a href="https://www.linkedin.com/" target="_blank" ><i class="fa-brands fa-linkedin"></i></a></div>
        </nav>
    </div>
    <div id="footer_copyright">
        &#169
        2023 all rights reserved
    </div>
    </div><!--fim flexbox-->
</footer>
<!--FIM FOOTER-->
</body>
</html>

<script>
    function sobreMim() {
    document.getElementById('sobre_mim').scrollIntoView({behavior: 'smooth'});
}

function interesses() {
    document.getElementById('interesses').scrollIntoView({behavior: 'smooth'});
}

function contato() {
    document.getElementById('contato').scrollIntoView({behavior: 'smooth'});
}
function projetos() {
    document.getElementById('projetos').scrollIntoView({behavior: 'smooth'});
}
function fotografia() {
    document.getElementById('fotografia').scrollIntoView({behavior: 'smooth'});
}
</script>