$(document).on("ready",esconde);

function esconde()
{
	$("aside.lateral").hide();
	$(".calificaciones").hide();
}

function cali()
{
	$("#bienvenida").hide();
	$(".calificaciones").show('slow');
}


$(function () {
    $('#tooltip1').tooltip();
});


