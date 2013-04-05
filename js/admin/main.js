$(document).ready(function(){
    $('#maintab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    })
});