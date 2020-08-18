
$document = $(document);
$document.ready(function() {
  
  var name_user = "";
  var email_user = ""; 
  var password_user = "";
  var confirmPassword = "";
  var name_regularExpress = /^[a-z ]+$/i;
  var email_regex = /^[a-z]+[0-9a-zA-Z_\.]*@[a-z_]+\.[a-z]+$/;
  var passwordRegex = /^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])[0-9a-zA-Z0-9]{8,}$/;

  function checkInputValidation(selector, error_message ="", goodMessage="", classError= "", regex=""){
    
    var input_value = $.trim($(selector).val());
    if(input_value == ""){
      $(classError).html(error_message);
      $(selector).addClass("border-red");
      $(selector).removeClass("border-green");
      input_value = "";
      
    } else if (testimony(regex, input_value)){
     name_user = (selector === "#name_inscription") ? input_value : name_user;
     email_user = (selector === "#email_inscription") ? input_value : email_user;
     password_user = (selector === "#password_inscription") ? input_value : password_user;
     confirmPassword = (selector === "#confirmPassword_inscription") ? input_value : confirmPassword;
     $(classError).html('<div class="text-success" style="color:green"><i class="fa fa-check-circle"> </i>'+ goodMessage +'</div>');
     $(selector).addClass("border-green");
     $(selector).removeClass("border-red");
     
     
     if(confirmPassword != ""){
       alert("iniside");
      var mdp_match = (confirmPassword === password_user) ? true : false;
     
      if(!mdp_match){
         alert(confirmPassword+" :"+ password_user);
         $(classError).html(error_message);
         $(selector).addClass("border-red");
         $(selector).removeClass("border-green");
      }
     }

     
     $.ajax({
       type : 'POST',
       url  : 'profil.php',
       dataType: 'JSON',
       beforeSend: function(){
        $(classError).html('<i class="fa fa-spinner fa-pulse fa-1x fa-fw" style="color:green"></i>');
       },
       data : {
         'check_email': email_user,
         'check_name' : name_user,
         'check_password' : password_user,
         'check_confirmPassword': confirmPassword
      
      },
       success: function(feedback) {
         setTimeout(function(){
          if (feedback['error'] == 'email_success'){
            // alert("success");
            
             $(classError).html('<div class="text-success" style="color:green"><i class="fa fa-check-circle"> </i>'+ goodMessage +'</div>');
              $(selecor).addClass("border-green");
              $(selector).removeClass("border-red");
              // name_user = name_user;
              // email_user = email_user;
              // password_user = password_user;
              // confirmPassword = confirmPassword;
              // alert(name_user, email_user, confirmPassword, password_user );
  
           }else if(feedback['error'] == 'email_error'){
               // alert(feedback['message']);
                $(classError).html(error_message);
                $(selecor).addClass("border-red");
                $(selector).removeClass("border-green");
                email_user = "";
                name_user = "";
                password_user = "";
                confirmPassword = "";
                
           }
         }, 1000);
       }, 
       

     })
    } else {
     $(classError).html(error_message);
     $(selecor).addClass("border-red");
     $(selector).removeClass("border-green");
     email_user = "";
     name_user = "";
     password_user = "";
     confirmPassword = "";

    }   
  }
  function testimony(regex, value){
    return regex.test(value);
  }
 

  $('#name_inscription').focusout(function(){
    checkInputValidation('#name_inscription', "un nom est requis sans caractere ni chiffre!", "valide", ".error-name",name_regularExpress );
  })
  $('#email_inscription').focusout(function(){
    checkInputValidation('#email_inscription', " email invalide ou existant deja", "valide",".error-email",email_regex);
  })

  $('#password_inscription').focusout(function(){
    checkInputValidation('#password_inscription', "le mot de passe doit être composer de majuscule minuscule et de 8 caracteres", "valide", ".error-password", passwordRegex);
  })
  $('#confirmPassword_inscription').focusout(function(){
    checkInputValidation('#confirmPassword_inscription', "les mot de passe ne sont pas identiques", "mot de passes identiques", ".error-confirmPassword", passwordRegex);
  })
  

})