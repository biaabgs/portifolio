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

    // Aqui você pode configurar o envio de email
    // mail($destinatario, "Novo contato do portfólio", $mensagem, "From: $email");

    echo "<p style='color:green; text-align:center;'>Mensagem enviada com sucesso! Obrigado, $nome.</p>";
}
?>

<footer>
    <div class="footer-container">
        <div class="footer-contacts">
            <h1>Entre em Contato</h1>
            <p>Ficarei feliz em conversar com você!</p>

            <form method="POST" class="footer-form">
                <input type="text" name="nome" placeholder="Seu nome" required>
                <input type="email" name="email" placeholder="Seu e-mail" required>
                <textarea name="mensagem" placeholder="Sua mensagem" rows="4" required></textarea>
                <button type="submit">Enviar</button>
            </form>

            
        </div>

        <ul class="footer-list">
            <li><h3>Portfólio</h3></li>
            <li><a href="#projetos" class="footer-link">Projetos</a></li>
            <li><a href="#sobre" class="footer-link">Sobre mim</a></li>
            <li><a href="#contato" class="footer-link">Contato</a></li>
        </ul>
        
        <div class="footer-contacts">
        <div class="footer-social-media">
                <a href="#" class="footer-link instagram"><i class="fa-brands fa-instagram"></i></a>
                <a href="#" class="footer-link linkedin"><i class="fa-brands fa-linkedin-in"></i></a>
                <a href="#" class="footer-link github"><i class="fa-brands fa-github"></i></a>
            </div>
    </div>

</footer>

</body>

</html>