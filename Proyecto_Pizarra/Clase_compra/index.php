<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_compra/compra.php");
 ?>
<html>
	<head>
		<title>Clase Compra</title>
	</head>

	<body>
		<?php 

			/*CARGO*/	
			$codcom=new COMPRA();
			echo "Codigo compra: ";
			$codcom->INSERTAR("01");
			echo $codcom->MOSTRAR();
			echo "<br>";

			/*Producto compra*/	
			$codprocom=new COMPRA();
			echo "Producto: ";
			$codprocom->INSERTAR_1("036");
			echo $codprocom->MOSTRAR_1();
			echo "<br>";

			/*Fecha*/	
			$fechacom=new COMPRA();
			echo "Fecha: ";
			$fechacom->INSERTAR_2("26/04/20");
			echo $fechacom->MOSTRAR_2();
			echo "<br>";

			/*Precio unidad*/	
			$preu=new COMPRA();
			echo "Precio unidad: ";
			$preu->INSERTAR_3("$1.200");
			echo $preu->MOSTRAR_3();
			echo "<br>";

			/*Precio final*/	
			$pref=new COMPRA();
			echo "Precio final: ";
			$pref->INSERTAR_4("$2.400");
			echo $pref->MOSTRAR_4();
			



			/*CREAR OTRO OBJETO*/
		
			/*OTRA FORMA*/
			/*Ïnstanciar*/
			
		 ?>
	</body>
</html>