
$document = $(document);
$document.ready(function() {
  var allInputsGood = false;
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
      allInputsGood = false;


    } else if (testimony(regex, input_value)){
     name_user = (selector === "#name_inscription") ? input_value : name_user;
     email_user = (selector === "#email_inscription") ? input_value : email_user;
     password_user = (selector === "#password_inscription") ? input_value : password_user;
     confirmPassword = (selector === "#confirmPassword_inscription") ? input_value : confirmPassword;




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
          if(confirmPassword != "" && confirmPassword !== password_user){
            feedback['error'] = "email_error";
            allInputsGood = false;
          }
          if (feedback['error'] === 'email_success'){
            // alert("success");

             $(classError).html('<div class="text-success" style="color:green"><i class="fa fa-check-circle"> </i>'+ goodMessage +'</div>');
              $(selector).addClass("border-green");
              $(selector).removeClass("border-red");
              name_user = name_user;
              email_user = email_user;
              password_user = password_user;
              confirmPassword = confirmPassword;
              allInputsGood = true;
              // alert("nom: "+ name_user);
              // alert("email: "+ email_user);
              // alert("password: "+ password_user);
              // alert("confirmation: "+ confirmPassword);

           }else if(feedback['error'] === 'email_error'){
               // alert(feedback['message']);
                $(classError).html(error_message);
                $(selector).addClass("border-red");
                $(selector).removeClass("border-green");
                email_user = "";
                name_user = "";
                password_user = "";
                confirmPassword = "";
                allInputsGood = false;


           }
         }, 1000);
       },


     })
    } else {
     $(classError).html(error_message);
     $(selector).addClass("border-red");
     $(selector).removeClass("border-green");
     email_user = "";
     name_user = "";
     password_user = "";
     confirmPassword = "";
     allInputsGood = false;

    }
  }
  function testimony(regex, value){
    return regex.test(value);
  }


  $('#name_inscription').focusout(function(){
    if($('#name_inscription').is(":visible")){
      checkInputValidation('#name_inscription', "un nom est requis sans caractere ni chiffre!", "valide", ".error-name",name_regularExpress );
    }
  })
  $('#email_inscription').focusout(function(){
    if($('#name_inscription').is(":visible")){
      checkInputValidation('#email_inscription', " email invalide ou existant deja", "valide",".error-email",email_regex);
    }

  })

  $('#password_inscription').focusout(function(){
    if($('#name_inscription').is(":visible")){
      checkInputValidation('#password_inscription', "le mot de passe doit être composer de majuscule minuscule et de 8 caracteres", "valide", ".error-password", passwordRegex);
    }

  })
  $('#confirmPassword_inscription').focusout(function(){

    checkInputValidation('#confirmPassword_inscription', "les mot de passe ne sont pas identiques", "mot de passes identiques", ".error-confirmPassword", passwordRegex);
    checkInputValidation('#password_inscription', "le mot de passe doit être composer de majuscule minuscule et de 8 caracteres", "valide", ".error-password", passwordRegex);

  })

    $("#submit").click(function () {
      if (allInputsGood){

        $.ajax({
          type: 'POST',
          url : 'profil.php?id=true',
           dataType: 'JSON',
          data: $("#formulaire_post").serialize(),
          beforeSend: function(){
            $(".progress-bar_show").addClass('progress-bar');
          },

          success: function(feedback) {
            setTimeout(() => {
              if(feedback['response'] == "success"){
                console.log("compte crée");
                location = feedback.msg;

              }else if(feedback['response'] == 'error'){
                console.log("cet email existe compte ne peut pas etre créer");
              }
            }, 3000);


          }
        })
      } else{
        email_user = "";
        name_user = "";
        password_user = password_user;
        confirmPassword = "";
        alert("tout est bad");

      }

    })
    $(".notification-connexion").hide();

})
