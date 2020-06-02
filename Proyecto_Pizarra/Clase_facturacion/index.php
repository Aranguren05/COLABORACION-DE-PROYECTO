<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_facturacion/facturacion.php");
 ?>
<html>
	<head>
		<title>Clase facturacion</title>
	</head>

	<body>
		<?php 

			/*CODIGO*/	
			$codfac=new FACTURACION();
			echo "Codigo factura: ";
			$codfac->INSERTAR("07");
			echo $codfac->MOSTRAR();
			echo "<br>";

			/*empleado*/	
			$empfac=new FACTURACION();
			echo "Empleado: ";
			$empfac->INSERTAR_1("Gomez Julian");
			echo $empfac->MOSTRAR_1();
			echo "<br>";

			/*cliente*/	
			$clifac=new FACTURACION();
			echo "Cliente : ";
			$clifac->INSERTAR_2("Gonzalez Fabian");
			echo $clifac->MOSTRAR_2();
			echo "<br>";

			/*recio unidad*/	
			$preufac=new FACTURACION();
			echo "Precio unidad: ";
			$preufac->INSERTAR_3("$2.100");
			echo $preufac->MOSTRAR_3();
			echo "<br>";

			/*precio final*/	
			$preffac=new FACTURACION();
			echo "Precio final: ";
			$preffac->INSERTAR_4("$3.800");
			echo $preffac->MOSTRAR_4();
			echo "<br>";

			/*fecha*/	
			$fechafac=new FACTURACION();
			echo "Fecha: ";
			$fechafac->INSERTAR_5("27/04/20");
			echo $fechafac->MOSTRAR_5();
			echo"<br>";


			/*HORA*/	
			$horafac=new FACTURACION();
			echo "Hora: ";
			$horafac->INSERTAR_6("10:18 A.M");
			echo $horafac->MOSTRAR_6();
			
			
		 ?>
	</body>
</html>