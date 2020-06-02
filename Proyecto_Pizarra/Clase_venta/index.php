<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_venta/venta.php");
 ?>
<html>
	<head>
		<title>Clase venta</title>
	</head>

	<body>
		<?php 

			/*CANTIDAD*/	
			$cantidadven=new VENTA();
			echo "cantidad productos: ";
			$cantidadven->INSERTAR("5");
			echo $cantidadven->MOSTRAR();
			echo "<br>";

			/*Codigo producto*/	
			$codproven=new VENTA();
			echo "Codigo producto: ";
			$codproven->INSERTAR_1("041");
			echo $codproven->MOSTRAR_1();
			echo "<br>";

			/*provedor*/	
			$proven=new VENTA();
			echo "producto: ";
			$proven->INSERTAR_2("Cuaderno cuadriculado 100 hojas");
			echo $proven->MOSTRAR_2();
			echo "<br>";

			/*empleado*/	
			$empven=new VENTA();
			echo "Empleado: ";
			$empven->INSERTAR_3("Gomez Julian");
			echo $empven->MOSTRAR_3();
			echo "<br>";

			/*codigo venta*/	
			$codven=new VENTA();
			echo "Codigo venta: ";
			$codven->INSERTAR_4("132");
			echo $codven->MOSTRAR_4();
		
			
		 ?>
	</body>
</html>