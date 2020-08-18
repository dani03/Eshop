  <?php
  include_once("head_link.php");
  include_once("first_navigationBar.php");
  ?>

  <link rel="stylesheet" href="styles/styles.css">
  
  <div class="container-fluid">
    <div class="row caroussel_describe">
        <div id="carouselExampleIndicators" class="col-lg-5 carousel slide single_caroussel" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner imageInsideCaroussel">
          <div class="carousel-item active ">
            <img class="d-block w-100" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-3.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-3.jpg" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="http://bestjquery.com/tutorial/product-grid/demo10/images/img-3.jpg" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!-- description  -->
      <div class="col-lg-4 offset-lg-3 offset-md-2 description_product">
        <h3> Description: </h3>
        <p id="description_text">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
          Nam nostrum officia eligendi
          praesentium debitis, voluptates laboriosam at modi voluptatibus,
          ad placeat? Accusantium expedita, culpa ratione sit explicabo illum
            veniam facere!</p>
                  <!-- mini form -->

    <div class=" row small_form">
        <form action="" method="post" class="in_small_form col-lg-12">
              <div class="form-group elements_options col-lg-4">
                <label for="exampleFormControlSelect1">quantité</label>
                  <select class=" option_elements_single" id="exampleFormControlSelect1">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
            </div>
            <div class="form-group elements_options col-lg-4">
                <label for="exampleFormControlSelect1">taille</label>
                  <select class=" option_elements_single" id="exampleFormControlSelect1">
                    <option>XS</option>
                    <option>S</option>
                    <option>M</option>
                    <option>L</option>
                    <option>XL</option>
                  </select>
            </div>
          <button style="margin-top:30px" class="btn btn-light col-lg-4"><i class="fas fa-cart-plus"></i>ajouter</button>
        </form>
      </div>
    </div>
    <?php include_once("footer.php")?>
  </div>
</div>
  
  <script src="javascript/script.JS"></script>