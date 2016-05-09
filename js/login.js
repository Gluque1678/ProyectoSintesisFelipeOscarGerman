$(document).ready(function(){
	$("#add_err").css('display', 'none', 'important');
	$("#login").click(function(){
		  username=$("#TIP").val();
		  password=$("#Password").val();
		  $.ajax({
		      type: "post",
		      url: "login.php",
          data: "TIP="+username+"&Password="+password,
		   success: function(html){
			    if(html=='true'){

			         window.location="busqueda.php";
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
