$(document).ready(function(){	

  //numero diligencia
 


////////////////////////////////////////////////////////////////////////////////

  //login
  $("#login").click(function(){
    //se recojen los valores de los inputs
		  var username=$("#TIP").val();
		  var password=$("#Password").val();
      //se vacía el div error
       $("#error").html(" ");
		  $.ajax({
        //se envía petición ajax vía post
  		  type: "post",
        //destino de la petición
  		  url: "login.php",
        //se envía los datos que se quieren consultar
        data: "TIP="+username+"&Password="+password,
        //el envío correcto devuelve la consulta
  		  success: function(html){
          //si es correcto, direccionará a busqueda.php
    			if(html=='true'){
            window.location="busqueda.php";
    		  }
        	else{
          //en caso contrario, se cambian las propiedades del botón login
            $("#login").prop({
              disable: true,
              value: "Entrar",
              class: "btn btn-success font-size-2em"
            });
            //se añade texto al div Error.
            $("#error").html("¡El usuario no existe!");
     		  }
      	},
        //antes de enviarse la consulta cambiará el estado del botón con id login
        beforeSend: function(){
          $("#login").prop({
              disable: false,
              value: "Comprobando...",
              class: "btn btn-warning font-size-2em"
          });
        }
    	});
    return false;
  });

//////////////////////////////////////////////////////////////////////////////////////

  //validación DNI al salir del input dni
  $("#iddni").blur(function(){
      //se recoje el valor del input con id iddni en mayúsculas
      var campo = $("#iddni").val().toUpperCase();
      //se separa el número de la letra y se guarda
      var numero = campo.substr(0,campo.length-1);
      //se separa la letra del número y se guarda
      var let = campo.substr(campo.length-1,1);
      //se genera el módulo 23 del número
      numero = numero % 23;
      letra='TRWAGMYFPDXBNJZSQVHLCKET';
      //se separa la letra de la variable anterior que coincide con numero
      letra=letra.substring(numero,numero+1);
      //si las letras son diferentes, el dni es erróneo
      if (letra!=let) alert('DNI incorrecto');
  });

////////////////////////////////////////////////////////////////////////////////////////

  //botón arriba
  $('.ir-arriba').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);

  });

  $(window).scroll(function(){
    if ( $(this).scrollTop() > 0){
       $('.ir-arriba').slideDown(300);
    } else {
      $('.ir-arriba').slideUp(300);

    }

  });




});

