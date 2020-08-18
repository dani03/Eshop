<?php 
$the_page = "panier";
include("head_link.php");
include_once("first_navigationBar.php") 
?> 
<head>
  <link rel="stylesheet" href="styles/styles.css">
</head>
<div class="container-fluid">
  <h4 class="panier_title animate__zoomIn">Panier</h4>
  <div class="row panier_liste">
     
      <div class="col-lg-8  liste_articles">
          <div class=" col-lg-5 col-sm-5 col-xs-12 image_miniature">
             
             <img src="images/womanSmiley.jpg"  class=".img-thumbnail rounded" alt="image article"> 
          </div>
          <div class=" col-lg-7 col-xs-12 options_panier">
            <h5 style="text-align:center"class="col-lg-6">titre</h5>
            <h6 style="text-align:center" class="col-lg-6"> prix ƒcfa</h6>
            <h6  style="text-align:center" class="col-lg-3 modifier"><i class="fas fa-pencil-alt"></i> modifier</h6>
            <h6  style="text-align:center" class="col-lg-3 trash"><i class="fas fa-1x fa-trash-alt"></i> supp</h6>
            <label  style="text-align:center" for="modif_qte">quantité</label>
            <select style="text-align:right; height:30px" name="" id="">
              <option value="">1</option>
              <option value="">2</option>
              <option value="">3</option>
              <option value="">4</option>
              <option value="">5</option>
            </select>
    
          </div>
         
      </div>
      <div class="col-lg-4 col-sm-12 col-xs-12 recap">
        <h5>recapitulatif</h5>
          <form action="" method="get">
            <label for="promo">code promo ?</label>
            <input class="form-control" type="text" name="" id="">
            <button class="btn btn-light" style="margin-top: 3px" type="submit">utiliser code promo</button>
          </form>
            <p>sous total:  <span>2000 Fcfa</span></p>   
            <p>nombres d'articles: <span> 3</span></p>
            <div class="paiements">
              <button class="btn btn-primary paiement_btn" name="p_CB">paiement par carte</button>
              <button class="btn btn-primary paiement_btn" name="p_OM">paiement par OM</button>
              <button class="btn btn-primary paiement_btn" name="p_SP">commander payer en boutique</button>
            </div>
            
          
      </div>
  </div>
</div>
<?php include_once('footer.php');