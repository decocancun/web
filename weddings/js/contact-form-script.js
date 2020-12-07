

$("#contactForm").validator().on("submit", function (event) {
    if (event.isDefaultPrevented()) {
        // handle the invalid form...
        formError();
        submitMSG(false, "Did you fill in the form properly?");
    } else {
        // everything looks good!
        event.preventDefault();
        submitForm();
    }
});


function submitForm(){
    // Initiate Variables With Form Content
    var campo="ok";
    var data = $("#contactForm").serialize();
    data = (campo=="ok")? data+"&save=ok": data;
    

    //realizar la peticion ajax con backend
    $.ajax({

        type:"POST",
        url:"datos/saveFormWeddings.php",
        data:data
  
      }).done(function(res){
  
          var res =JSON.parse(res);
          var resultado = res.ResExitoso;
          if (res.status=='success') {
            $("#contactForm")[0].reset(resultado);
  
          $.each(resultado, function(i,value){
          $('.'+i).hide();
  
          });
          alert("correo Enviado con exito");
          
          
          // function resultado(){
          //   swal({
          //     title: "Success!",
          //     type: "success",
          //     timer: 2000,
          //     showConfirmButton: false
          //   }, function(){

          //   });
          // }
          // resultado("success");
  
         }else{
          var errors = res.errors;
          $.each(errors, function(i,value){
            $('.'+i).parent().children('span').text(value).show().css({"color":"red","font-family": "Barlow"});
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
