$(document).ready(function(){
    
    $("a").tooltip();
    
    $( "#btn_nuevo_representante, #btn_cancelar_representantes_add" ).button();
    $( "#btn_aceptar_representantes_add" ).button().click(function(){
        $("#form_representantes_add").submit();
    });
    
    $( "#btn_no_representantes_del" ).button().click(function(){
        
    });
    $( "#btn_si_representantes_del" ).button();
    
        
    $( "#fecha_nacimiento" ).datepicker({
        changeMonth:true,
        changeYear:true,
        dateFormat:'dd/mm/yy',
        defaultDate:"-18y",
        maxDate:"-18y"
    });
    
    
});