$(document).ready(function(){
	//a21
    $("#insertara21").click(function(){
        dni=$("#DNI").val();
        diligencias=$("#diligencias").val();
        agentes=$("#agentes").val();
        dia=$("#dia").val();
        hora=$("#hora").val();
        lugar=$("#lugar").val();
        primerapellido=$("#primerapellido").val();
        segundoapellido=$("#segundoapellido").val();
        nombre=$("#nombre").val();
        permiso=$("#permiso").val();
        sexo=$('input:radio[name=opciones2]:checked').val();
        altura=$("#altura").val();
        peso=$("#peso").val();
        descripcion=$("#descripcion").val();
        constitucion=$('input:radio[name=opciones]:checked').val();
        comportamiento=$('input[name="checkboxEnLinea[]"]:checked').each(function() {
            //$(this).val() es el valor del checkbox correspondiente
            checkboxValues.push($(this).val());
            });
        descripcioncomportamiento=$("#descripcioncomportamiento").val();
        mirada=$('input[name="checkboxEnLinea2[]"]:checked').each(function() {
            //$(this).val() es el valor del checkbox correspondiente
            checkboxValues.push($(this).val());
            });
        habla=$('input[name="checkboxEnLinea3[]"]:checked').each(function() {
            //$(this).val() es el valor del checkbox correspondiente
            checkboxValues.push($(this).val());
            });
        expresion=$('input[name="checkboxEnLinea4[]"]:checked').each(function() {
            //$(this).val() es el valor del checkbox correspondiente
            checkboxValues.push($(this).val());
            });
        psicomotricidad=$('input[name="checkboxEnLinea5[]"]:checked').each(function() {
            //$(this).val() es el valor del checkbox correspondiente
            checkboxValues.push($(this).val());
            });
        descripcionmotri=$("#descripcionmotri").val();
        $.ajax({
        type: "post",
        url: "a21.php",
        data: "DNI"+dni+"&Numdiligencias"+diligencias+"&TIP1"+agentes+"&Dia"+dia+"&Hora"+hora
        +"&Lugar"+lugar+"&Nombre"+nombre+"&Primerapellido"+primerapellido+"&Segundoapellido"+segundoapellido+
        "&Permiso"+permiso+"&Sexo"+sexo+"&Altura"+altura+"&Peso"+peso+"&Descripcionconduccion"+descripcion+
        "&Constitucion"+constitucion+"&"
       success: function(html){
        if(html=='true'){

        window.location="t27.php";
          }
          else{
              $("#add_err").css('display', 'inline', 'important');
              $("#add_err").html("<img src='img/alert.png' />Error");
          }
      },
       beforeSend:function(){
              $("#add_err").css('display', 'inline', 'important');
              $("#add_err").html("<img src='img/loading.gif' /> Cargando...");
           }
       });
    return false;
  });
});
