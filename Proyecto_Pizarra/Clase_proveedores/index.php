<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_proveedores/proveedores.php");
 ?>
<html>
	<head>
		<title>Clase proveedores</title>
	</head>

	<body>
		<?php 

			/*CODIGO*/	
			$codprov=new PROVEEDORES();
			echo "Codigo proveedor: ";
			$codprov->INSERTAR("11");
			echo $codprov->MOSTRAR();
			echo "<br>";

			/*Apellido*/	
			$apeprov=new PROVEEDORES();
			echo "Apellidos proveedor: ";
			$apeprov->INSERTAR_1("Garzon");
			echo $apeprov->MOSTRAR_1();
			echo "<br>";

			/*NNombres*/	
			$nomprov=new PROVEEDORES();
			echo "Nombres empleado: ";
			$nomprov->INSERTAR_2("Hector");
			echo $nomprov->MOSTRAR_2();
			echo "<br>";

			/*tel*/	
			$dirprov=new PROVEEDORES();
			echo "Direccion proveedor: ";
			$dirprov->INSERTAR_3("cra 99 a 121 92");
			echo $dirprov->MOSTRAR_3();
			echo "<br>";

			/*cor*/	
			$corprov=new PROVEEDORES();
			echo "correo proveedor: ";
			$corprov->INSERTAR_4("gomezhector@gmail.com");
			echo $corprov->MOSTRAR_4();
			echo "<br>";

			/*correo*/	
			$diremp=new PROVEEDORES();
			echo "Direccion: ";
			$diremp->INSERTAR_5("cra 114 b # 152 b 24");
			echo $diremp->MOSTRAR_5();
			
			
		 ?>
	</body>
</html>