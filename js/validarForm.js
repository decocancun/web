/*=============================================
registrar usuario
=============================================*/
$(".success").hide();
$("span.help-block").hide();

function saveData(campo){
   if (campo==='name'){
        nombre = document.getElementById(campo).value;
        if( nombre == null || nombre.length == 0 || /^\s+$/.test(nombre) ){
        $('#'+campo).parent().children('span').text("The name field is required *").show().css({"color":"red","font-size":"14px"});
        return false;
        }
        if (!(/^[a-z A-Z]/.test(nombre))) {
        $('#'+campo).parent().children('span').text("name is incorrect *").show().css({"color":"red","font-size":"14px"});
        return false;
        }
        else{
            $('#'+campo).parent().children('span').hide();
            return true;
          }
    }
    if (campo==='email'){
        email = document.getElementById(campo).value;
        if( email == null || email.length == 0 || /^\s+$/.test(email) ) {
          $('#'+campo).parent().children('span').text("The email field is required *").show().css({"color":"red","font-size":"14px"});
          return false;
        }
        else{
            if (!(/\S+@\S+\.\S+/.test(email))) {
              $('#'+campo).parent().children('span').text("Email is incorrect *").show().css({"color":"red","font-size":"14px"});
              return false;
            }
            else{
              $('#'+campo).parent().children('span').hide();
              return true;
            }
        }
    }

    if (campo==='phone'){
        phone = document.getElementById(campo).value;
        if( phone == null || phone.length == 0 || /^\s+$/.test(phone) ) {
          $('#'+campo).parent().children('span').text("The phone field is required *").show().css({"color":"red","font-size":"14px"});
            return false;
        }else{
            if( isNaN(phone)) {
               $('#'+campo).parent().children('span').text("Number phone is incorrect *").show().css({"color":"red","font-size":"14px"});
                return false;
            }else{
                if (!(/^\d{10}$/.test(phone))){
                  $('#'+campo).parent().children('span').text("Number phone is incorrect (9984504520) *").show().css({"color":"red","font-size":"14px"});
                  return false;
                }else{
                  $('#'+campo).parent().children('span').hide();
                  return true;
                }
            }
        }
    }


    var data = $("#formDatos").serialize();
    data = (campo=="ok")? data+"&save=ok": data;

    //realizar la peticion ajax con backend
    $.ajax({

      type:"POST",
      url:"datos/saveForm.php",
      data:data

    }).done(function(res){

        var res =JSON.parse(res);
        var resultado = res.ResExitoso;
        if (res.status=='success') {
          $("#formDatos")[0].reset(resultado);

        $.each(resultado, function(i,value){
        $('.'+i).hide();

        });

        function resultado(){
          swal({
            title: "Success!",
            //text: "Redirecting in 2 seconds.",
            type: "success",
            timer: 2000,
            showConfirmButton: false
          }, function(){
                window.location.href = "contact-us.php";
          });
        }
        resultado("success");

       }else{
        var errors = res.errors;
        $.each(errors, function(i,value){

          $('.'+i).parent().children('span').text(value).show().css({"color":"red","font-size":"13px"});

        });


        var resultado = res.ResExitoso;
        $.each(resultado, function(i,value){

          $('.'+i).hide();

        });


       }


    }).fail(function(a,b,c){
      alert(c);
    });

}
