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
                    <li class="nav-item">
                        <a class="nav-link" href="foto-work.php">Фото работ</a>
                    </li>
                    <li class="nav-item active">
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

echo '<!--Main Layout-->
    <main class="text-justify" style="margin-top: 100px;">
        <div class="container">
            <div class="row d-flex align-items-center">
                    <div class="col-md-3">
                        <img src="src/img/avatar-above.png" class="img-thumbnail rounded-circle z-depth-1-half mb-4">
                    </div>
                    <div class="col-md-9">
                        <p>Давайте знакомиться! Меня зовут Наталья. <i class="fa fa-smile-o text-default fa-2x"></i>
                            Я мастер кератинового выпрямление волос, ботокса и комплексного лечения волос. Я очень люблю свою работу и ценю каждого клиента!
                            Что касается места роботы, то я принимаю в студии, на дому и с выездом к вам.</p>
                        <p>Все зависит от ваших предпочтений и различных обстоятельств. К примеру, в редких случаях приходится работать поздно вечером или на выходных. Тогда я принимаю на дому.</p>
                        <p>Позже я выложу фото своего домашнего рабочего места, чтобы вы имели представление)  Вот моя личная страница в Инстаграм <code><a href="https://www.instagram.com/botox_keratin_nikolaev" target="_blank">@botox_keratin_nikolaev</a></code>.
                            Если возникают вопросы по поводу процедур и ухода за волосами - обращайтесь в директ.</p>
                        <p style="margin-bottom: 0;">Я с удовольствием отвечу на все ваши вопросы!!! У меня вы можете приобрести косметику для волос: шампуни, бальзамы.</p>
                    </div>

            </div>
        </div>
    </main>
    <!--Main Layout-->';

echo '<div class="block-footer">' . $footer . '</div>';

