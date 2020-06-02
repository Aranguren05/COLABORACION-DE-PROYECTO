<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_documento/documento.php");
 ?>
<html>
	<head>
		<title>Clase Documento</title>
	</head>

	<body>
		<?php 

			/*Codigo*/	
			$coddoc=new DOCUMENTO();
			echo "Codigo tipo de documento: ";
			$coddoc->INSERTAR("01");
			echo $coddoc->MOSTRAR();
			echo "<br>";

			/*NOMBRE*/	
			$nomdoc=new DOCUMENTO();
			echo "Nombre del documento: ";
			$nomdoc->INSERTAR_1("Cedula");
			echo $nomdoc->MOSTRAR_1();
			echo "<br>";


			/*CREAR OTRO OBJETO*/
		
			/*OTRA FORMA*/
			/*Ïnstanciar*/
			
		 ?>
	</body>
</html>