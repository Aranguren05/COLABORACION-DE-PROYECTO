<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_clientes/clientes.php");
 ?>
<html>
	<head>
		<title>Clase clientes</title>
	</head>

	<body>
		<?php 

			/*CARGO*/	
			$codcli=new CLIENTE();
			echo "Codigo cliente: ";
			$codcli->INSERTAR("032");
			echo $codcli->MOSTRAR();
			echo "<br>";

			/*apellidos*/	
			$apefac=new CLIENTE();
			echo "apellidos: ";
			$apefac->INSERTAR_1("Gutierrez");
			echo $apefac->MOSTRAR_1();
			echo "<br>";

			/*nombre*/	
			$nomcli=new CLIENTE();
			echo "Nombres: ";
			$nomcli->INSERTAR_2("Santiago");
			echo $nomcli->MOSTRAR_2();
			echo "<br>";

			/*telefono*/	
			$telcli=new CLIENTE();
			echo "Telefono: ";
			$telcli->INSERTAR_3("3138314798");
			echo $telcli->MOSTRAR_3();
			echo "<br>";

			/*correo*/	
			$corcli=new CLIENTE();
			echo "Correo: ";
			$corcli->INSERTAR_4("gutierrezsant@gmail.com");
			echo $corcli->MOSTRAR_4();
		
			
		 ?>
	</body>
</html>