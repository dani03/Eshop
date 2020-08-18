<?php
  
?>
<body>
<!-- premiere navigation bar -->
<?php include_once("first_navigationBar.php") ?>
<!-- div en dessous de la nav -->
<div class="container-fluid element_articles">
<div class="row map_div">
  <div class="col-lg-4 slogan_site">
    <h5 class="slogan_texte">Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae magni omnis aliquid quam vitae architecto provident ipsum perspiciatis, vero repudiandae
       soluta.</h5>
    <div class="carte" id="map">

    </div>
  </div>
  <!-- carousel -->

  <div class="col-md-12 col-lg-8 slide_carousel" >
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100 image_slide1" src="views/images/dame.jpeg" alt="First slide">

          </div>
          <div class="carousel-item">
            <img class=" img-fluid d-block w-100 image_slide1" src="views/images/light_skin.jpeg" alt="second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 image_slide1" src="views/images/black_w.jpeg" alt="third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100 image_slide1" src="views/images/girls.jpeg" alt="third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Precedent</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">suivant</span>
        </a>
      </div>
  </div>

  <div id="loading"></div>
  <!-- navigation hommes femmes enfants -->
  <?php include("card.php"); ?>
  <?php include("card.php"); ?>

  <?php include("footer.php"); ?>
