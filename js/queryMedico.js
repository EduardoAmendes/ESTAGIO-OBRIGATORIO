$(document).ready(function () {
    $.post('../ACS/frmMedico.php', function(retorna){
        $("queryMedico").html(retorna);
    });
});