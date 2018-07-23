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
                    <a class="nav-link" href="7-mifov-o-keratine">Статьи о кератине</a>
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
                <!-- Section: Blog v.3 -->
<section class="my-5">

  <!-- Section heading -->
  <h1 class="h1-responsive font-weight-bold text-center my-5">Все о кератиновом выпрямление и уходу за волосами</h1>
  <!-- Section description -->
  <p class="text-center dark-grey-text w-responsive mx-auto mb-5">Выпрямление волос кератином уже давно стало очень популярным среди девушек. Так каждая из нас мечтает о красивых, 
  шикарных волосах, которые будут привлекать внимание окружающих.</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">
      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>
    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">
      <!-- Post title -->
      <h3 class="mb-3"><strong>Мифы о кератиновом выпрямлении волос</strong></h3>
      <!-- Excerpt -->
      <p class="dark-grey-text">По поводу проведения процедуры кератинового выпрямления, постоянно ведутся разнообразные споры и обсуждения. 
  Одни говорят о том, что кератин приносит вред волосам, другие же рассказывают о том, что с помощью кератина для волос, возможно, добиться прекрасного вида шевелюры. 
  Давайте рассмотрим основные мифы, которые вводят в заблуждение тех, кто хочет сделать данную процедуру.</p>
      <!-- Read more button -->
      <a href="vse-pro-keratin.php" class="btn btn-primary btn-md" title="Мифы о кератиновом выпрямлении волос">Читать далее...</a>
    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/31.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
      <!-- Excerpt -->
      <p class="dark-grey-text">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident et accusamus iusto odio dignissimos et dolorum fuga.</p>
      <!-- Post data -->
      <p>by <a class="font-weight-bold">Jessica Clark</a>, 16/04/2018</p>
      <!-- Read more button -->
      <a class="btn btn-primary btn-md">Read more</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  <hr class="my-5">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 col-xl-4">

      <!-- Featured image -->
      <div class="view overlay rounded z-depth-1-half mb-lg-0 mb-4">
        <img class="img-fluid" src="https://mdbootstrap.com/img/Photos/Others/images/52.jpg" alt="Sample image">
        <a>
          <div class="mask rgba-white-slight"></div>
        </a>
      </div>

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7 col-xl-8">

      <!-- Post title -->
      <h3 class="font-weight-bold mb-3"><strong>Title of the news</strong></h3>
      <!-- Excerpt -->
      <p class="dark-grey-text">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, psam voluptatem quia consectetur.</p>
      <!-- Post data -->
      <p>by <a class="font-weight-bold">Jessica Clark</a>, 12/04/2018</p>
      <!-- Read more button -->
      <a class="btn btn-primary btn-md">Read more</a>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

</section>
<!-- Section: Blog v.3 -->
                
            </div>
        </div>
    </main>
    <!--Main Layout-->';

echo '<div class="block-footer">' . $footer . '</div>';


