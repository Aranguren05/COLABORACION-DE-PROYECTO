<?php

	include("../LOGICA/clase_com.php"); 

	if (isset($_POST['sub_com'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new compra_reporte();
		//llamar funcion reporte_gral()
		$res= $reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/COMPRA/frm_compra.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		//$codigo_cargo=$_POST['txcod_car'];
		$pro_com=$_POST['txpro_com'];
		$can_pro=$_POST['can_pro'];
		$fecha=$_POST['fecha_com'];
		$preu=$_POST['preu_com'];
		$pref=$_POST['pref_com'];



		//enviar el dato para hacer ingresado
		$insertar=new Clase_Compra(NULL,$pro_com,$can_pro,$fecha,$preu,$pref);
		$res_inser=$insertar->insertar_compra();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new producto_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_jose();
			//donde mostrar la respuesta

			include("../VISTA/COMPRA/frm_compra.php");
		}//fin if 
		
		else
		{
			echo "Error al insertar los datos";
		}//fin else
		

	}//fin boton sub_registrar
?>