<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_valor_devengado/valor_devengado.php");
 ?>
<html>
	<head>
		<title>Clase valor devengado</title>
	</head>

	<body>
		<?php 

			/*codigp*/	
			$coddev=new DEVENGADO();
			echo "Codigo valor devengado: ";
			$coddev->INSERTAR("013");
			echo $coddev->MOSTRAR();
			echo "<br>";

			/*empleado*/	
			$empdev=new DEVENGADO();
			echo "Empleado: ";
			$empdev->INSERTAR_1("Gomez Julian");
			echo $empdev->MOSTRAR_1();
			echo "<br>";

			/*Fecha inicial*/	
			$fechaidev=new DEVENGADO();
			echo "Fecha inicial: ";
			$fechaidev->INSERTAR_2("1/04/20");
			echo $fechaidev->MOSTRAR_2();
			echo "<br>";

			/*fecha final*/	
			$fechafdev=new DEVENGADO();
			echo "Fecha final: ";
			$fechafdev->INSERTAR_3("$30/04/20");
			echo $fechafdev->MOSTRAR_3();
			echo "<br>";

			/*Pago total*/	
			$pagototaldev=new DEVENGADO();
			echo "pago total: ";
			$pagototaldev->INSERTAR_4("$1.600.000");
			echo $pagototaldev->MOSTRAR_4();
			



			/*CREAR OTRO OBJETO*/
		
			/*OTRA FORMA*/
			/*Ïnstanciar*/
			
		 ?>
	</body>
</html>