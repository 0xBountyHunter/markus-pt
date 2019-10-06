<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en" id="top">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <title>Márkus-PT</title>
</head>
<body>
    <header>
        <nav>
            <div class="nav-wrapper">
            <a href="#top" class="logo"><?php echo $lang['logo']?></a>
            <ul class="list">
                <li><a href="#"><a href="index.php?lang=en"><?php echo $lang['eng'] ?></a>&nbsp;|&nbsp;<a href="index.php?lang=hu"><?php echo $lang['hun']?></a></li>
                <li><a href="#pricing"><?php echo $lang['coaching']?></a></li>
                <li><a href="#contact"><?php echo $lang['contact']?></a></li>
            </ul>
            </div>
        </nav>
    </header>
    <main>
        <section class="home" >
            <div class="container">
            <div class="home-box" data-aos="fade-up">
                <div>
                    <p class="home-name"><?php echo $lang['name']?></p>
                    <h1 class="home-header header"><?php echo $lang['home-header']?></h1>
                    
                </div>
                <a href="#about" class="cta"><?php echo $lang['cta']?></a>
            </div>
            </div>
        </section>
        <section class="secondary" id="about">
            <div class="container"  data-aos="fade-in">
            <h2 class="heading"><?php echo $lang['sec-header']?></h2>
            <p class="para"><?php echo $lang['sec-para']?></p>
            </div>
        </section>
        <section class="tertiary">
            <div class="container" data-aos="fade-in">
            <div class="about">
                <h2 class="heading"><?php echo $lang['ter-header']?></h2>
                <p class="para"><?php echo $lang['ter-para']?></p>
                <picture>
                <img src="img/markus-sm.jpg" alt="A picture about me">
            </picture>
            </div>
            </div>
            
        </section>
        <section class="pricing" id="pricing">
            <div class="container" data-aos="fade-in">
            <h2 class="heading"><?php echo $lang['qua-header']?></h2>
            <p class="para"><?php echo $lang['qua-para']?></p><br>
            <div class="lists">
                <ul class="training__list">
                    <li><?php echo $lang['li-1']?></li>
                    <li><?php echo $lang['li-2']?></li>
                    <li><?php echo $lang['li-3']?></li>
                    <li><?php echo $lang['li-4']?></li>
                </ul>
                <ul class="pricing__list">
                    <li>3000Ft</li>
                    <li>27000Ft</li>
                    <li>14000Ft</li>
                    <li>27000Ft</li>
                </ul>
            </div>
            <p  class="cta-sale"><?php echo $lang['sale']?></p>
            </div>
        </section>
        <section class="contact" id="contact">
            <div class="container" data-aos="fade-in">
                <h2 class="heading"><?php echo $lang['qui-header']?></h2>
                <a href="tel:+36703691271" class="tel">+36703691271</a>
                <a href="mailto:markustraining21@gmail.com" class="email">markustraining21@gmail.com</a>
                <a href="https://www.facebook.com/markusedzogyor" target="_blank"><img class="fb-img" src="img/facebook.svg">markusedzogyor</a>
            </div>
            
        </section>
    </main>
    <footer>
        <p><?php echo $lang['footer'] ?></p>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 1000
        });
    </script>
</body>
</html>