<?php
include("mysql.class.php");
$db=new MysQL();
$db->open();

$usuario=$_POST['busqueda'];



$consulta=$db->consulta
("select * from usuarios where nombre='$usuario'");

if($row=$db->fetch_array($consulta))
{
	echo $row['nombre'];
}
else
{
	echo "el regsitro no existe";
}

?>