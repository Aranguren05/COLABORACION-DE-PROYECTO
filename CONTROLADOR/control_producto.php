<?php

	include("../LOGICA/clase_pro.php"); 

	if (isset($_POST['sub_pro'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new producto_reporte();
		//llamar funcion reporte_gral()
		$res=$reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/PRODUCTO/frm_producto.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		//$codigo_cargo=$_POST['txcod_car'];
		$nom_pro=$_POST['txnom_pro'];
		$precio=$_POST['precio'];
		$descripcion=$_POST['txdes_pro'];
		$tipo=$_POST['txtipo_pro'];
		$proveedor=$_POST['fkcod_prov'];



		//enviar el dato para hacer ingresado
		$insertar=new Clase_Producto(NULL,$nom_pro,$precio,$descripcion,$tipo,$proveedor);
		$res_inser=$insertar->insertar_producto();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new producto_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_gral();
			//donde mostrar la respuesta

			include("../VISTA/PRODUCTO/frm_producto.php");
		}//fin if 
		
		else
		{
			echo "Error al insertar los datos";
		}//fin else
		

	}//fin boton sub_registrar
?>