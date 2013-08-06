<?php
include ("mysql.class.php");
$db=new MySQL();
$db->open();
$usuario=$_POST['user'];
$clave=$_POST['pass'];
session_start();


$consulta=$db->consulta("select * from usuarios where nombre='$usuario'");
$row=$db->fetch_array($consulta);

$_SESSION["id"]= $row['id'];
if ($row['tipo']==1)
{
	
	if ($row['clave']==$clave && $row['nombre']==$usuario)
	{

	$consulta2=$db->consulta("select nombre,apellido_p,apellido_m,id_cuatri,carrera from alumno,carrera where alumno.id=$row[id] limit 1;");
	$row2=$db->fetch_array($consulta2);

	$_SESSION["nombre"] = $row2['nombre']." ".$row2['apellido_p']." ".$row2['apellido_m']; 
	$_SESSION["carrera"] = $row2['carrera'];
	$_SESSION["cuatri"]= $row2['id_cuatri'];

	header("location: ../menu_alumno.php");
	}
}





?>