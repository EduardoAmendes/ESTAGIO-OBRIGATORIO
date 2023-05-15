$(document).ready(function () {
    $.post('../ACS/frmAgendaMedico.php', function(retorna){
        $("queryMedicoAgenda").html(retorna);
    });
});