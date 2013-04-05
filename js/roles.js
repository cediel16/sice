$(document).ready(function(){
    $("#btnModalAnadirRol").click(function(){
        $("#rol").removeClass("disabled").removeAttr("readonly","true").val('');
        $("#btnCancelar").removeClass("disabled").removeAttr("disabled");
        $("#btnAceptar").removeClass("disabled").removeAttr("disabled");        
        $("#modalAnadirRol").modal({
            backdrop:'static',
            keyboard:false
        });
    });
    
    $("#frmAnadirRol").submit(function(){
        
        /*
        $("#btnModalAnadirRol").addClass("disabled").attr("disabled","true");
        $("#rol").addClass("disabled").attr("readonly","true");
        $("#btnCancelar").addClass("disabled").attr("disabled","true");
        $("#btnAceptar").addClass("disabled").attr("disabled","true");
        */
        $("#icon-loading-modal").removeClass("hide");
        return false;
    });
});
