$(document).ready(function(){	

//comprobar si la hora de la prueba 2 es menor que prueba 1
$('#hora2').blur(function(){
  if($('#hora2').val() < $('#hora1').val()) {
     $('#hora2').focus();
     $('#hora2').css("background-color", "#FFEBEE");
    } else {
      $('#hora2').css("background-color", "#fff");
    }

});

$('#segundoconductor').hide();

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

  //cuando se hace focus en el input dni, desaparece el mensaje de dni erróneo
  $('#iddni').focus(function(){
    $('#errorDni').hide();
  })

   //validación DNI al presionar BUSCAR o salir de el
  $("#buscar").click(function(){
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
      if (letra!=let) {
        $('#errorDni').html("DNI introducido incorrectamente").prop("style","color: #FFC107; font-weight: bolder;").show();
        return false; //para que no se realice la consulta
      }else{
        $('#errorDni').hide();
        return true;
      }
      
  });

////////////////////////////////////////////////////////////////////////////////////////

  //botón arriba al hacer click hará el método metro hacia arriba
  $('.ir-arriba').click(function(){
      $('body, html').animate({
        scrollTop: '0px'
      }, 300);

  });

  //según la posición del scroll, se esconderá o mostrará
  $(window).scroll(function(){
    if ( $(this).scrollTop() > 0){
       $('.ir-arriba').slideDown(300);
    } else {
      $('.ir-arriba').slideUp(300);

    }

  });

/////////////////////////////////////////////////////////////////////////////////////////////

  //rellenar campo permiso en FIRMA
  $('#numerosustituto').blur(function(){
    $('#permisoConductor2').val($('#permiso').val());

  });

  //rellenar campo denumero en DENUNCIA 
  $('#denumero').val($('#Numdiligencias').val());
  $('#denuncia').val($('#Numdiligencias').val());

  //rellenar campo permiso en DENUNCIA
  $('#datoslugar').blur(function(){
    $('#denunciaLugar').val($('#datoslugar').val());
    $('#lugarinmob').val($('#datoslugar').val());

  });

//////////////////////////////////////////////////////////////////////////////////////////////
  
  //mostrar o esconder el submenú del segundo conductor
  $('#motivolevantamiento').change(function(){
    var opcion =  $('#motivolevantamiento').val();
    if (opcion === '1') $('#segundoconductor').show();
    else $('#segundoconductor').hide();
  });



});


