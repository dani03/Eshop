// carte google 
// On initialise la latitude et la longitude de Paris (centre de la carte)
var lat = 48.852969;
var lon = 2.349903;
var map = null;
// Fonction d'initialisation de la carte
function initMap() {
  // Créer l'objet "map" et l'insèrer dans l'élément HTML qui a l'ID "map"
  map = new google.maps.Map(document.getElementById("map"), {
    // Nous plaçons le centre de la carte avec les coordonnées ci-dessus
    center: new google.maps.LatLng(lat, lon), 
    // Nous définissons le zoom par défaut
    zoom: 11, 
    // Nous définissons le type de carte (ici carte routière)
    mapTypeId: google.maps.MapTypeId.ROADMAP, 
    // Nous activons les options de contrôle de la carte (plan, satellite...)
    mapTypeControl: true,
    // Nous désactivons la roulette de souris
    scrollwheel: false, 
    mapTypeControlOptions: {
      // Cette option sert à définir comment les options se placent
      style: google.maps.MapTypeControlStyle.HORIZONTAL_BAR 
    },
    // Activation des options de navigation dans la carte (zoom...)
    navigationControl: true, 
    navigationControlOptions: {
      // Comment ces options doivent-elles s'afficher
      style: google.maps.NavigationControlStyle.ZOOM_PAN 
    }
    
  });
    // Nous ajoutons un marqueur
  var marker = new google.maps.Marker({
    // Nous définissons sa position (syntaxe json)
    position: {lat: lat, lng: lon},
    // Nous définissons à quelle carte il est ajouté
    map: map
  });
}
window.onload = function(){
  // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
  initMap(); 
};
// spinner quand la page charge 
function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1000);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';

}

onReady(function() {
  setVisible('.container', true);
  setVisible('#loading', false);
  setVisible('.caroussel_describe', true);
  setVisible('#loading_single', false);
});
// formulaire les slide up 
// quand on clique sur connecxion

$(document).ready(function(){
  //connexion 
  $("#connexion").click(function(){
    $(this).css({'color':'green'});
    $("#inscription").css({"color": "rgb(212, 208, 208)"});
    $("#mdp_forgot").css({"color": ""});
    $('.inputButton').css({'marginTop':'1px'});
    $(".pointeur").animate({ marginRight: '36%' });
    $(".outInConnexion").slideUp("slow");
    $(".mdp_").slideUp("slow");
    $(".InConnexion").slideDown("slow");
    $('.inputButton').css({'marginBottom':'12px'});
    $('.firstInput').css({'marginBottom':'12px'});
  });
  // inscription 
  $("#inscription").click(function(){
    $("#connexion").css({"color": ""});
    $("#mdp_forgot").css({"color": ""});
    $(this).css({'color':'green'});
    $('.firstInput').css({'marginBottom':'12px'});
    $(".pointeur").animate({ marginRight: '-3%' });
    $(".allOfUs").slideDown("slow");
    $(".mdp_").slideUp("slow");
    $('.inputButton').css({'marginBottom':'12px'});
  });

  //mot de passe oublie
  $("#mdp_forgot").click(function(){
    $("#connexion").css({"color": ""});
    $("#inscription").css({"color": "rgb(212, 208, 208)"});
    $(this).css({'color':'green'});
    $('.mdp_').css({'marginTop':'1px'});
    $('.mdp_').css({'marginBottom':'12px'});
    $(".pointeur").animate({ marginRight: '-44%' });
    $(".mdp_").slideDown("slow");
    $(".allOfUs").slideUp("slow");

  });
});