<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_cargo/cargo.php");
 ?>
<html>
	<head>
		<title>Clase Cargo</title>
	</head>

	<body>
		<?php 

			/*CARGO*/	
			$codcargo=new CARGO();
			echo "Codigo cargo: ";
			$codcargo->INSERTAR("01");
			echo $codcargo->MOSTRAR();
			echo "<br>";

			/*NOMBRE*/	
			$nomcar=new CARGO();
			echo "Nombre cargo: ";
			$nomcar->INSERTAR_1("Administrador");
			echo $nomcar->MOSTRAR_1();
			echo "<br>";

			/*SALARIO*/	
			$salcar=new CARGO();
			echo "Salario cargo: ";
			$salcar->INSERTAR_2("$1.800.000");
			echo $salcar->MOSTRAR_2();
			echo "<br";



			/*CREAR OTRO OBJETO*/
		
			/*OTRA FORMA*/
			/*Ïnstanciar*/
			
		 ?>
	</body>
</html>