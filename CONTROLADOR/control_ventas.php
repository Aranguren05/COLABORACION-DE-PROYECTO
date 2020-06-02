<?php

	include("../LOGICA/clase_ven.php"); 

	if (isset($_POST['sub_ven'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new ventas_reporte();
		//llamar funcion reporte_gral()
		$res= $reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/VENTAS/frm_ventas.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		//$codigo_cargo=$_POST['txcod_car'];
		$fac_ven=$_POST['fac_ven'];
		$cod_pro_ven=$_POST['cod_pro_ven'];
		$can_pro_ven=$_POST['can_pro_ven'];
		$emp_ven=$_POST['txemp_ven'];
		$cli_ven=$_POST['cli_ven'];



		//enviar el dato para hacer ingresado
		$insertar=new Clase_Ventas(NULL,$fac_ven,$cod_pro_ven,$can_pro_ven,$emp_ven,$cli_ven);
		$res_inser=$insertar->insertar_ventas();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new ventas_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_gral();
			//donde mostrar la respuesta

			include("../VISTA/VENTAS/frm_ventas.php");
		}//fin if 
		
		else
		{
			echo "Error al insertar los datos";
		}//fin else
		

	}//fin boton sub_registrar
?>