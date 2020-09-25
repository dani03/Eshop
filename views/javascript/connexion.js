 $(document).ready(function(){
  var login_email = "";
  var login_password = "";
  function checkLoginValidate(selector, errorMessage, goodMessage){
      
          alert("caché");
          input_value = $.trim($(selector).val());
          if (input_value.length == "") {
            $(selector).html(errorMessage);
            $(selector).addClass("border-red");
            $(selector).removeClass("border-green");
            login_email = "";
            login_password = "";
          } else {
            $(selector).html(goodMessage);
            $(selector).addClass("border-green");
            $(selector).removeClass("border-red");
            login_email = (selector === "#email_inscription") ? input_value : login_email;
            login_password = (selector === "#password_inscription") ? input_value : login_password;
          }    
      
  }
  

 
    
    $('#email_inscription').focusout(function(){
      if($('#name_inscription').is(":hidden")){
        checkLoginValidate('#email_inscription', "email incorrect", "email valide");
      }
      
    })
    $('#password_inscription').focusout(function(){
      if($('#name_inscription').is(":hidden")){
        checkLoginValidate('#password_inscription', "le mot de passe est incorrect", "ça match");
      }
      
    })
     
 

 
})