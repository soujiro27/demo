<?php
include ("mysql.class.php");
$db=new MySQL();
$db->open();
$usuario=$_POST['user'];
$clave=$_POST['pass'];
session_start();


$consulta=$db->consulta("select * from usuarios where nombre='$usuario'");
$row=$db->fetch_array($consulta);


if ($row['tipo']==1)
{
	header("location: ../menu_alumno.php");
}
echo ("entra");



?>