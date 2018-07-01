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
        </div>
    </nav>

    <div class="view intro-2">
        <div class="full-bg-img">
            <div class="mask rgba-brown-strong flex-center d-flex flex-column">
                <div class="container text-center white-text wow fadeInUp">
                <h1 class="mb-4 mt-5">Дайте вашим волосам новое дыхание</h1>
                    <div class="block-header">
                        <h3>Выпрямление вьющихся волос, с помощью кератина.</h3>
                        <br>
                        <p>Эффект держится от 3 до 6 месяцев.</p>
                        <p>Вы ощутите всю красоту и мощь ваших волос, которые придадут вам уверенности в себе!</p>
                    </div>

                </div>
                <!-- Material auto-sizing form -->
                <form class="my-4">
                    <div class="form-row align-items-center">
                        <div class="col-auto">
                            <div class="md-form">
                                <input type="text" class="form-control mb-2 white-text" id="inlineFormInputMD" placeholder="Ваше имя" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <div class="md-form input-group">
                                <input type="tel" class="form-control pl-0 rounded-0 white-text" id="inlineFormInputGroupMD" placeholder="Ваш телефон" required>
                            </div>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-light-green mb-0">Оставить заявку</button>
                        </div>
                    </div>
                </form>
                <!-- Material auto-sizing form -->
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

                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            </div>
        </div>

    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <!--Google map-->
                <div id="map-container" class="z-depth-1" style="height: 500px"></div>
            </div>
        </div>
    </div>



</main>
<!--Main Layout-->
<?php include_once "template/footer.php" ?>