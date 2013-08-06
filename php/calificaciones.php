<?php
session_start();
include ("mysql.class.php");
$db=new MySQL();
$db->open();
$id=$_POST['id_alumno'];

$cadena="";
$consulta=$db->consulta("select boleta.id_alumno, boleta.calificacion, boleta.parcial, materia.materia  from boleta,materia where boleta.id_materia=materia.id and boleta.id_alumno=$id;");

$cadena="<h2>Calificaciones</h2>";
if ($row=$db->fetch_array($consulta))
{
	
	do {
	$cadena=$cadena.$row['calificacion'];
		


	} while ($row=$db->fetch_array($consulta));


}
echo $cadena;

?>

