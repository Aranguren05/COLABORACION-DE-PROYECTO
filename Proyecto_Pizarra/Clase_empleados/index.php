<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_empleados/empleados.php");
 ?>
<html>
	<head>
		<title>Clase Compra</title>
	</head>

	<body>
		<?php 

			/*CODIGO*/	
			$codemp=new EMPLEADOS();
			echo "Codigo empleado: ";
			$codemp->INSERTAR("07");
			echo $codemp->MOSTRAR();
			echo "<br>";

			/*Apellido*/	
			$apeemp=new EMPLEADOS();
			echo "Apellidos empleado: ";
			$apeemp->INSERTAR_1("Gomez Gonzalez");
			echo $apeemp->MOSTRAR_1();
			echo "<br>";

			/*NNombres*/	
			$nomemp=new EMPLEADOS();
			echo "Nombres empleado: ";
			$nomemp->INSERTAR_2("Julian David");
			echo $nomemp->MOSTRAR_2();
			echo "<br>";

			/*tel*/	
			$telemp=new EMPLEADOS();
			echo "Telefono: ";
			$telemp->INSERTAR_3("$3138304105");
			echo $telemp->MOSTRAR_3();
			echo "<br>";

			/*correo*/	
			$coremp=new EMPLEADOS();
			echo "correo: ";
			$coremp->INSERTAR_4("juliangomezprosoft@gmail.com");
			echo $coremp->MOSTRAR_4();
			echo "<br>";

			/*correo*/	
			$diremp=new EMPLEADOS();
			echo "Direccion: ";
			$diremp->INSERTAR_5("cra 114 b # 152 b 24");
			echo $diremp->MOSTRAR_5();
			
			
		 ?>
	</body>
</html>