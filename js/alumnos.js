$(document).on("ready",esconde);

function esconde()
{
	$("aside.lateral").hide();
	$(".calificaciones").hide();
}

function cali(id)
{
	var id_alumno=parseInt(id);
	$("#bienvenida").hide();
	$(".calificaciones").show('slow');



	$.post("php/calificaciones.php",{id_alumno:id_alumno},function(data){
		var html=data;
		$("#secion_calificaciones").html(html);
	});
//delete html;
//delete id_alumno;*/
}


$(function () {
    $('#tooltip1').tooltip();
});


