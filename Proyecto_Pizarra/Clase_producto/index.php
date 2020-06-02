<?php 
	/*invocar el archivo clase*/
	require_once("../Clase_producto/producto.php");
 ?>
<html>
	<head>
		<title>Clase producto</title>
	</head>

	<body>
		<?php 

			/*CODIGO*/	
			$codpro=new PRODUCTO();
			echo "Codigo producto: ";
			$codpro->INSERTAR("12");
			echo $codpro->MOSTRAR();
			echo "<br>";

			/*Codigo producto*/	
			$nompro=new PRODUCTO();
			echo "Nombre producto: ";
			$nompro->INSERTAR_1("Esfero Bic Negro");
			echo $nompro->MOSTRAR_1();
			echo "<br>";

			/*precio*/	
			$preciopro=new PRODUCTO();
			echo "Precio: ";
			$preciopro->INSERTAR_2("$1.000");
			echo $preciopro->MOSTRAR_2();
			echo "<br>";

			/*descripccion*/	
			$descripcionpro=new PRODUCTO();
			echo "Descripcion: ";
			$descripcionpro->INSERTAR_3("Esfero tinta negra Bic");
			echo $descripcionpro->MOSTRAR_3();
			echo "<br>";

			/*tipopro*/	
			$tipopro=new PRODUCTO();
			echo "Tipo producto: ";
			$tipopro->INSERTAR_4("6");
			echo $tipopro->MOSTRAR_4();
		
			
		 ?>
	</body>
</html>