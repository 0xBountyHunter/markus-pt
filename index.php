<?php
    include "config.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet"> 
    <title>Márkus-PT</title>
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <a><?php echo $lang['logo']?></a>
            </div>
            <ul class="list">
                <li><a href=""><a href="index.php?lang=en"><?php echo $lang['eng'] ?></a>&nbsp;|&nbsp;<a href="index.php?lang=hu"><?php echo $lang['hun']?></a></li>
                <li><a href=""><?php echo $lang['about']?></a></li>
                <li><a href=""><?php echo $lang['coaching']?></a></li>
                <li><a href=""><?php echo $lang['contact']?></a></li>
            </ul>
            <div class="burger">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
        </nav>
    </header>
    <main>
        <section class="home">
            <div class="home-box">
                <p class="home-name"><?php echo $lang['name']?></p>
                <h1 class="home-header"><?php echo $lang['home-header']?></h1>
                <a href="#" class="cta"><?php echo $lang['cta']?></a>
            </div>
        </section>
        <section class="secondary">
            <h2 class="heading"><?php echo $lang['sec-header']?></h2>
            <p class="para"><?php echo $lang['sec-para']?></p>
        </section>
        <section class="tertiary">
            <div class="about">
                <h2 class="heading"><?php echo $lang['ter-header']?></h2>
                <p class="para"><?php echo $lang['ter-para']?></p>
            </div>
            <!--<picture>
                <img src="" alt="">
            </picture>-->
        </section>
        <section class="pricing">
            <h2 class="heading"><?php echo $lang['qua-header']?></h2>
            <p class="para"><?php echo $lang['qua-para']?></p>
            <ul class="training__list">
                <li><?php echo $lang['li-1']?></li>
                <li><?php echo $lang['li-2']?></li>
                <li><?php echo $lang['li-3']?></li>
                <li><?php echo $lang['li-4']?></li>
            </ul>
            <ul class="pricing__list">
                <li>3000Ft</li>
                <li>20000Ft</li>
                <li>10000Ft</li>
                <li>20000Ft</li>
            </ul>
            <a href="#" class="cta-sale"><?php echo $lang['sale']?></a>
        </section>
        <section class="contact">
            <h2 class="heading"><?php echo $lang['qui-header']?></h2>
            <a href="#" class="tel">+36703691271</a>
            <a href="#" class="email">markustraining21@gmail.com</a>
        </section>
    </main>
    <footer>
        <p><?php echo $lang['footer'] ?></p>
    </footer>
</body>
</html>