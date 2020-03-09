<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 * @var \App\View\AppView $this
 */

$cakeDescription = 'Geragear';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.css">

    <?= $this->Html->css('milligram.min.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('all.css') ?> <!-- font-awsome -->

    <?= $this->Html->css('animate.css') ?>
    <?= $this->Html->css('owl.carousel.min.css') ?>
    <?= $this->Html->css('owl.theme.default.min.css') ?>
    <?= $this->Html->css('magnific-popup.css') ?>
    <?= $this->Html->css('flaticon.css') ?>
    <?= $this->Html->css('ionicons.min.css') ?>
    <?= $this->Html->css('icomoon.css') ?>
    <?= $this->Html->css('style.css') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>

<div class="container pt-5">
    <div class="row justify-content-between">
        <div class="col">
            <a class="navbar-brand" href="/">Geragear<span> Custom Apparel</span></a>
        </div>
        <div class="col d-flex justify-content-end">
            <div class="social-media">
                <p class="mb-0 d-flex">
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-facebook"><i class="sr-only">Facebook</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-twitter"><i class="sr-only">Twitter</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-instagram"><i class="sr-only">Instagram</i></span></a>
                    <a href="#" class="d-flex align-items-center justify-content-center"><span class="fab fa-dribbble"><i class="sr-only">Dribbble</i></span></a>
                </p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span> Menu
        </button>
        <form action="#" class="searchform order-lg-last">
            <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Search">
                <button type="submit" placeholder="" class="form-control search"><span class="fa fa-search"></span></button>
            </div>
        </form>
        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav mr-auto">
                <li class=<?= $this->fetch('navItem', 'nav-item') ?>><?php echo $this->Html->link('Home', '/', ['class' => 'nav-link']);?></li>
                <li class=<?= $this->fetch('navItem', 'nav-item') ?>><?php echo $this->Html->link('About', '/pages/about', ['class' => 'nav-link']);?></li>
                <li class="nav-item"><a href="team.html" class="nav-link">Our team</a></li>
                <li class="nav-item"><a href="project.html" class="nav-link">Project</a></li>
                <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
                <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->


<!--
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="/"><span>Cake</span>PHP</a>
        </div>
        <div class="top-nav-links">
            <a target="_blank" href="https://book.cakephp.org/4/">Documentation</a>
            <a target="_blank" href="https://api.cakephp.org/4/">API</a>
        </div>
    </nav>
    -->
    <main class="main">
       <!-- <div class="container"> -->
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
       <!-- </div> -->
    </main>
    <footer>
    </footer>

    <?= $this->Html->script('jquery.min.js') ?>
    <?= $this->Html->script('jquery-migrate-3.0.1.min.js') ?>
    <?= $this->Html->script('popper.min.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>
    <?= $this->Html->script('jquery.easing.1.3.js') ?>
    <?= $this->Html->script('jquery.waypoints.min.js') ?>
    <?= $this->Html->script('jquery.stellar.min.js') ?>
    <?= $this->Html->script('jquery.animateNumber.min.js') ?>
    <?= $this->Html->script('owl.carousel.min.js') ?>
    <?= $this->Html->script('jquery.magnific-popup.min.js') ?>
    <?= $this->Html->script('scrollax.min.js') ?>
    <?= $this->Html->script('google-map.js') ?>
    <?= $this->Html->script('main.js') ?>



</body>
</html>
