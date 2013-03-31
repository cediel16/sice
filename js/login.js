$(document).ready(function(){
    $( "#dialog_login" ).dialog({
        closeOnEscape: false,
        beforeclose: function (event, ui) { return false; },
        dialogClass: "noclose",
        resizable:false,
        title:"Iniciar sesión",
        draggable:false,
        width:350,
        buttons:{
            "¿Olvidaste tu contraseña?":function(){
                alert("En construcción...");
            },
            "Iniciar sesión":function(){
                $("#form_login").submit();
            }
        }
    });    
});