<?php
require_once("php/usuario.php");
$obj =new Usuario();
$obj->alta("Cristian","1","1234");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["IDusuario"]." ".$fial["nombre"]." ".$fila["tipo"]." ".$fila["password"]."<br>";
}
?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
require_once("php/materiapri.php");
$obj =new Materia();
$obj->alta("Refresco","2","lata 355 ml","7","1","25");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["ID"]." ".$fial["Nombre"]." ".$fila["Tipo"]." ".$fila["Descripcion"]." ".$fila["Precio"]." ".$fila["Stock"]." ".$fila["Existencias"]."<br>";
}
?>
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7
<?php
require_once("php/mobiliario.php");
$obj =new Mobiliario();
$obj->alta("silla","cuero negro", "plegable","35","7","oficina");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["ID"]." ".$fial["nombre"]." ".$fila["descripcion"]." ".$fila["cantidad"]." ".$fila["nic"]." ".$fila["tipo"]."<br>";
}
?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////7
<?php
require_once("php/pago.php");
$obj =new Pago();
$obj->alta("23","12","25-02-2020","1","12");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["IDempleado"]." ".$fial["sal"]." ".$fila["fecha_dep"]." ".$fila["met_pag"]." ".$fila["des"]."<br>";
}
?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
require_once("php/proveedor.php");
$obj =new Proveedor();
$obj->alta("esteban","7223459751","carlos leon #25","metepec","esteban123@gmail.com","INNH987NNA7");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["nombre"]." ".$fial["telefono"]." ".$fila["direccion"]." ".$fila["correo"]." ".$fila["rfc"]."<br>";
}
?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
require_once("php/producto.php");
$obj =new Producto();
$obj->alta("chocolate","15 gr cacao","8","7","55","50","60","dulces");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["nombre"]." ".$fial["descripcion"]." ".$fila["preciov"]." ".$fila["precioc"]." ".$fila["cantidad"]." ".$fila["cantnim"]." ".$fila["cantmax"]." ".$fila["cantegoria"]."<br>";
}
?>
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
require_once("php/venta.php");
$obj =new Venta();
$obj->alta("25-05-2020","31","2357","1");
$res = $obj->consulta();

while($fila = $res->fetch_assoc()){
	echo $fila["fecha"]." ".$fial["IDCliente"]." ".$fila["Total"]." ".$fila["tipo_pago"]."<br>";
}
?>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
      requiere_once("php/cliente.php");
      $obj = new cliente();
      $obj->alta("Karla","Metepec","72332433","karla@gmail.com","Martinez", "Villalva", "Femenino","13-06-2000");
      $res = $obj-> consulta();
      while($fila = $res->fetch_assoc()){
      	echo $fila["IDcliente"]." ".$fila["nombre"]."".$fila["direccion"].$fila["telefono"]."".$fila["correo"].$fila["apematerno"]."".$fila["apepaterno"].$fila["sexo"].$fila["fenacimiento"]."<br";
      }
?>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
      requiere_once("php/compra.php");
      $obj = new compra();
      $obj->alta("10-06-2020","10","12","7");
      $res = $obj-> consulta();
      while($fila = $res->fetch_assoc()){
      	echo $fila["IDcompra"]." ".$fila["fecha"]."".$fila["total"].$fila["telefono"].$fila["tipo_pago"]."<br";
      }
?>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php
      requiere_once("php/devoluciones.php");
      $obj = new devoluciones();
      $obj->alta("29-06-2020","20","Papas sabritas","2");
      $fecha, $cantidad,$descripcion
      $res = $obj-> consulta();
      while($fila = $res->fetch_assoc()){
      	echo $fila["IDdevoluciones"]." ".$fila["fecha"]."".$fila["cantidad"].$fila["descripcion"]."<br";
      }
?>
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
<?php      
      requiere_once("php/empleado.php");
      $obj = new empleado();
      $obj->alta("Gael","Morales","Martinez","gael@gmail.com","GAMOMA0302039", "724679976", "Masculino","13-03-2020","Gerente","5000","Soltero", "998976762");
      $res = $obj-> consulta();
      while($fila = $res->fetch_assoc()){
      	echo $fila["IDempleado"]." ".$fila["nombre"]."".$fila["appaterno"].$fila["apmaterno"]."".$fila["correo"].$fila["rfc"]."".$fila["telefono"].$fila["sexo"].$fila["fechadeingreso"].$fila["cargo"].$fila["salario"].$fila["estadocivil"].$fila["nss"]."<br";
      }
?>