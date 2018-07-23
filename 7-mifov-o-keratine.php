<?php

require_once "variables/var-list.php";
require_once "variables/tmpl.php";

echo $head;

echo '<header>' . $call_orders . '
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
                        <a class="nav-link" href="foto-work">Фото работ</a>
                    </li>
                    <li class="nav-item active">
                    <a class="nav-link" href="vse-pro-keratin">Статьи о кератине</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about">Обо мне <span class="sr-only">(current)</span></a>
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
                  <div>
                  <h1 class="text-center h1-responsive mb-4">Мифы о кератиновом выпрямлении</h1>
                  <div class="alert alert-secondary">По поводу проведения процедуры кератинового выпрямления, постоянно ведутся разнообразные споры и обсуждения. 
  Одни говорят о том, что кератин приносит вред волосам, другие же рассказывают о том, что с помощью кератина для волос, возможно, добиться прекрасного вида шевелюры. 
  Давайте рассмотрим основные мифы, которые вводят в заблуждение тех, кто хочет сделать данную процедуру.</div>

                  <ol type="1" class="my-4">
                    <li><strong>Кератин приносит вред волосам.</strong> Волосы могут быть, повреждены во время процедуры, только если, мастером использовались не качественные материалы, был подобран не правильно кератин или 
                    утюжок для волос был не качественны. Данные факторы, конечно же, могут повлиять на волосы. Но если вы идете к мастеру, в которого много клиентов и о нем слышны только положительные отзывы, можете быть спокойны за свои волосы.</li>
                    <li><strong>После процедуры нужно использовать специальный шампунь.</strong> Да, шампунь не должен иметь в своем составе сульфатов, а вот какая марка, шампуни или за какую цену его приобрести зависит только от вас. 
                    Определенных средств нет.</li>
                    <li><strong>Выпадение волос после процедуры.</strong> Такого не может быть, так как кератин наносится по всей длине волос и при этом на корни его не наносят, и он ни как не может воздействовать на кожу головы.</li>
                    <li><strong>Нельзя мыть волосы на протяжении 72 часов.</strong> Если Вы хотите сохранить результат полученый после проведения процедуры, все таки их мыть не стоит. Но известно, что уже есть такой кератин после 
                    которого уже на следующий день можно мыть и закалывать волосы.</li>
                    <li><strong>Эффект после процедуры держится больше 4 месяцев.</strong> Если вы делаете процедуры в первые, то повторно следует ее сделать через два месяца. Но, опять же все зависит от структуры ваших волос. Если не 
                    делать коррекции волос может начать крутиться, но при этом он сохранит свой блеск.</li>
                    <li><strong>После постоянных процедур кератирования</strong>, прекратить его значит лишиться красивых волос. Естественно после того, как вы перестанете 
                    делать кератирование, волосы приобретут первоначальный вид и уже не будет такими здоровыми и блестящими. И здесь срабатывает женское подсознание, и они начинают думать, что именно кератин испортил их волосы.</li>
                    <li><strong>Процедура доступна только в салонах красоты.</strong> Вовсе нет. Данную процедуру можно сделать и у мастера дома, главное найти хорошего мастера с качественным материалом и инструментом. 
                    И главное, что это все доступно для каждого.</li>
                  </ol>
                </div>
            </div>
        </div>
    </main>
    <!--Main Layout-->';

echo '<div class="block-footer">' . $footer . '</div>';

