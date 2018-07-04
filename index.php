<?php

require_once "variables/var-list.php";

echo '
<!DOCTYPE html>
<html lang="en" class="full-height">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="yandex-verification" content="7eaf8f203d6d1a1b" />
    <title>Кератиновое выпрямление волос</title>
    <!-- My style -->
    <link href="../src/style/style.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css" rel="stylesheet">

    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js?key=AIzaSyACHrrCY1PXDPq0L0HWZaTyZsi0Onv32j4"></script>
    <script type="text/javascript" src="src/script/js.js"></script>
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.13.0/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
</head>
<body>
<!--Main Navigation-->
<header>
<div class="position-fixed call-action">
    <a href="#!"><img src="src/img/call-icon.gif" style="width: 100px;"></a>
</div>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
        <a class="navbar-brand" href="/"><img src="../src/img/logo.png" class="logo"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="foto-work.php">Портфолио</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">Обо мне</a>
                </li>
            </ul>
            <!-- Social Icon  -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item d-flex align-self-center">
                    <a href="tel:+380958874999" class="mr-2 text-white font-weight-normal">
                        <i class="fa fa-phone light-green-text-2 mr-2"></i>' . $param[telephone] . '</a>
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

    <div class="view intro-2">
        <div class="full-bg-img">
            <div class="mask rgba-brown-strong flex-center d-flex flex-column">
                <div class="container text-center white-text wow fadeInUp d-flex flex-column align-items-center">
                <h1 class="mt-5 font-weight-normal" style="margin-bottom: 30px;">Дайте вашим волосам новое дыхание</h1>
                    <div class="block-header d-flex flex-column">
                        <h3>Выпрямление вьющихся волос, с помощью кератина. А теперь и ботокс волос</h3>
                        <br>
                        <p>Эффект держится от 3 до 6 месяцев.</p>
                        <p>Вы ощутите всю красоту и мощь ваших волос, которые придадут вам уверенности в себе!</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

</header>
<!--Main Navigation-->

<!--Main Layout-->
<main class="text-center py-5">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">ПРЕИМУЩЕСТВА ПРОЦЕДУРЫ</h2>
                <div class="text-left">
                    <h4 class="h4-responsive header-text"><i class="fa fa-check mr-3"></i> ПОДХОДИТ ВСЕМ</h4>
                    <p class="font-italic font-weight-normal">с любым типом волос, после химии, окрашивания
                        и мелирования</p>
                    <br>
                    <h4 class="h4-responsive header-text"><i class="fa fa-check mr-3"></i> ПОЛНОЕ ВОССТАНОВЛЕНИЕ</h4>
                    <p class="font-italic font-weight-normal">волосам вернется природная сила, глянцевый,
                        блестящий вид</p>
                    <br>
                    <h4 class="h4-responsive header-text"><i class="fa fa-check mr-3"></i> ЭФФЕКТ УТЮГА</h4>
                    <p class="font-italic font-weight-normal">возможность разгладить вьющиеся и очень кучерявые волосы.
                    Это идеальное решения для волос, имеющих
                        тенденцию реагировать на влажность</p>
                    <br>
                    <h4 class="h4-responsive header-text"><i class="fa fa-check mr-3"></i> БЫСТРЫЙ РЕЗУЛЬТАТ</h4>
                    <p class="font-italic font-weight-normal">вы увидите результат уже после первого мытья. Волосы станут
                    блестящими, шелковисто-гладкими и удивительно
                        ухоженными</p>
                    <br>
                    <h4 class="h4-responsive header-text"><i class="fa fa-check mr-3"></i> ДОЛГОСРОЧНЫЙ ЭФФЕКТ</h4>
                    <p class="font-italic font-weight-normal">гарантия 6 месяцев (при использовании
                        специальных средств по уходу)</p>
                    <br>
                    <h4 class="h4-responsive header-text"><i class="fa fa-check mr-3"></i> БЛЕСК И УВЛАЖНЕНИЕ</h4>
                    <p class="font-italic font-weight-normal">для сухих, натуральных волос, а так же поврежденныx
                        окрашиванием или химией</p>
                </div>
            </div>
        </div>

    </div>
    <hr>
    <div class="container">
    <!-- Projects section v.3 -->
    <section class="mt-4">

        <!-- Section heading -->
        <h2 class="mt-5">ЭТАПЫ КЕРАТИНОВОГО ВЫПРЯМЛЕНИЯ ВОЛОС</h2>
        <!-- Section description -->
        <p class="grey-text text-center w-responsive mx-auto lead">(все процедуры занимают не более 3 часов)</p>

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-5">
                <!--Image-->
                <img src="src/img/step-one-keratin.png" alt="Первый и второй этап кератинового выпрямления волос" class="img-fluid rounded z-depth-2" style="max-width: 280px;height: 280px;">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-12 col-12">
                        <div>
                            <i class="fa fa-flag-checkered fa-2x cyan-text"></i>
                            <h5 class="font-weight-bold mb-3">Первый этап</h5>
                        </div>
                        <p class="grey-text">Мастер выясняет потребности клиента, индивидуально подбирает состав для выравнивания волос, консультирует клиента по процедуре.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row">
                    <div class="col-md-12 col-12">
                        <div>
                            <i class="fa fa-shower fa-2x red-text"></i>
                            <h5 class="font-weight-bold mb-3">Второй этап</h5>
                        </div>
                        <p class="grey-text">Проводится мытье волос специальным очищающим шампунем.</p>
                    </div>
                </div>
                <!-- Grid row -->


            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-5 d-none d-sm-block d-md-block d-lg-block">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-7">
                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-12 col-12">
                        <div>
                            <i class="fa fa-bullhorn fa-2x deep-purple-text"></i>
                            <h5 class="font-weight-bold mb-3">Третий этап</h5>
                        </div>
                        <p class="grey-text mb-0">Волосы высушиваются досуха феном.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-12 col-12">
                        <div>
                            <i class="fa fa-tint fa-2x indigo-text"></i>
                            <h5 class="font-weight-bold mb-3">Четвертый этап</h5>
                        </div>
                        <p class="grey-text">На волосы наносится кератиновый состав.</p>
                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-5 d-none d-sm-block d-md-block d-lg-block">
                <!--Image-->
                <img src="src/img/step-two-keratin.jpg" alt="Третий и четвертый этап нанесения кератина или ботокса" class="img-fluid rounded z-depth-2" style="max-width: 280px;height: 280px;">
            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

        <hr class="my-5 d-none d-sm-block d-md-block d-lg-block">

        <!-- Grid row -->
        <div class="row">

            <!-- Grid column -->
            <div class="col-lg-5 mb-lg-0 mb-5 d-none d-sm-block d-md-block d-lg-block">
                <!--Image-->
                <img src="src/img/step-three-keratin.jpg" alt="Пятый и шестой этап кератинового выпрямления волос, нанесение кетарина" class="img-fluid rounded z-depth-2" style="max-width: 280px;height: 280px;">
            </div>
            <!-- Grid column -->

            <!-- Grid column -->
            <div class="col-lg-7">

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-12 col-12">
                        <div>
                            <i class="fa fa-bullhorn fa-2x deep-purple-text"></i>
                            <h5 class="font-weight-bold mb-3">Пятый этап</h5>
                        </div>
                        <p class="grey-text">Волосы снова высушиваются с помощью фена.</p>
                    </div>
                </div>
                <!-- Grid row -->

                <!-- Grid row -->
                <div class="row mb-3">
                    <div class="col-md-12 col-12">
                        <div>
                            <i class="fa fa-magic fa-2x blue-text"></i>
                            <h5 class="font-weight-bold mb-3">Шестой этап</h5>
                        </div>
                        <p class="grey-text mb-0">Проводится закрепление состава с помощью высокой температуры с помощью утюжка.</p>
                    </div>
                </div>
                <!-- Grid row -->

            </div>
            <!-- Grid column -->

        </div>
        <!-- Grid row -->

    </section>
    </div>
    <div class="d-none d-sm-block d-md-block d-lg-block my-5"></div>
    <!-- Projects section v.3 -->
    <hr>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <h3 class="alert text-uppercase mt-4">Где мы находимся</h3>
                <!--Google map-->
                <div id="map-container" class="z-depth-1" style="height: 500px"></div>
            </div>
        </div>
    </div>



</main>
<!--Main Layout-->';

include_once "template/footer.php";