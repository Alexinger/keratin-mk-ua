<?php

require_once "variables/var-list.php";
require_once "variables/tmpl.php";

echo $head;

echo '<header>
        <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar bg-warning">
            <a class="navbar-brand" href="/"><img src="src/img/logo.png" class="logo"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Главная</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="foto-work.php">Фото работ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">Обо мне <span class="sr-only">(current)</span></a>
                    </li>
                </ul>
                <!-- Social Icon  -->
                <ul class="navbar-nav nav-flex-icons">
                    <li class="nav-item d-flex align-self-center">
                        <a href="tel:+380958874999" class="mr-2 text-white font-weight-normal">
                            <i class="fa fa-phone light-green-text-2 mr-2"></i>
                            (095) 88 74 999
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.facebook.com/Natalykeratin" target="_blank" class="nav-link" title="Открыть профиль в Facebook">
                            <i class="fa fa-facebook light-green-text-2"></i>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.instagram.com/botox_keratin_nikolaev" target="_blank" class="nav-link" title="Открыть профиль в Instagram">
                            <i class="fa fa-instagram light-green-text-2"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>';


echo '<div class="container" style="margin-top: 95px;">
                <div class="mdb-lightbox d-flex flex-wrap">';

                        foreach($array as $key=>$value):
                            echo '<figure class="col-md-4">';
                            echo '<a href="' . $value . '" data-size="1600x1067">';
                            echo '<img src="' . $value . '" class="img-fluid z-depth-2"></a>';
                            echo '</figure>';
                        endforeach;

echo '</div></div>';

echo $footer;