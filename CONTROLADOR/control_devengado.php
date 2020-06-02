<?php

	include("../LOGICA/clase_val_dev.php"); 

	if (isset($_POST['sub_dev'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new devengado_reporte();
		//llamar funcion reporte_gral()
		$res= $reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/VALOR_DEVENGADO/frm_devengado.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		//$codigo_cargo=$_POST['txcod_car'];
		$emp_dev=$_POST['txemp_dev'];
		$fechai=$_POST['fechai_dev'];
		$fechaf=$_POST['fechaf_dev'];
		$total_dev=$_POST['total_dev'];

		//enviar el dato para hacer ingresado
		$insertar=new Clase_Devengado(NULL,$emp_dev,$fechai,$fechaf,$total_dev);
		$res_inser=$insertar->insertar_devengado();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new devengado_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_gral();
			//donde mostrar la respuesta

			include("../VISTA/VALOR_DEVENGADO/frm_devengado.php");
		}//fin if 
		
		else
		{
			echo "Error al insertar los datos";
		}//fin else
		

	}//fin boton sub_registrar

	//METODO PARA VERIFICAR EL PASO DE INFORMACION DE LA OPCION MODIFICAR

	if(isset($_GET['cod_act']))
	{

		//pasar informacion de caja de texto a variable
		$act=$_GET['cod_act'];
		//instanciar clase log_Curso
		$reporte= new devengado_reporte();
		//llamar el metodo especifico
		$res=$reporte->reporte_codigo($act);
		//mostrar en el formulario especifico al proceso
		include("../VISTA/VALOR_DEVENGADO/frm_actualizar_devengado.php");
	}//fin paso informacion

	//validar el pulsar boton sub actualizar
	if(isset($_POST['sub_actualizar']))
	{	
		//recibir los parametros del formulario
		$codigo_devengado=$_POST['txcod_dev'];
		$empleado_devengado=$_POST['txemp_dev'];
		$fecha_inicial=$_POST['fechai_dev'];
		$fecha_final=$_POST['fechaf_dev'];
		$pago_total=$_POST['pagototal_dev'];
		//enviar los datos para ser procesados
		$actualizar= new Clase_Devengado($codigo_devengado,$empleado_devengado,$fecha_inicial,$fecha_final,$pago_total);
		$res_modi=$actualizar->modificar_devengado();
		if($res_modi ==1)
		{
			/*invocar clase curso_reporte*/	
			$reporte= new devengado_reporte();
			/*llamar funcion reporte_gral()*/
			$res=$reporte->reporte_gral();
			/*donde mostrar la respuesta*/

			include("../VISTA/VALOR_DEVENGADO/frm_devengado.php");
		}//fin if

		else
		{
			echo "OJO ERROR AL MODIFICAR DATOS";
		}//fin else

	}//fin sub actualizar

	//METODO PARA VERIFICAR EL PASO DE INFORMACION DE LA OPCION ELIMINAR
	
	if(isset($_GET['cod_eli']))
	{

		//pasar informacion de caja de texto a variable
		$eli=$_GET['cod_eli'];
		//instanciar clase log_Curso
		$reporte= new Clase_Devengado($eli,null,null,null,null);
		//llamar el metodo especifico
		$res_eli=$reporte->eliminar_devengado();
		if($res_eli==1)
		{
				/*invocar clase curso_reporte*/	
				$reporte= new devengado_reporte();
				/*llamar funcion reporte_gral()*/
				$res=$reporte->reporte_gral();
				/*donde mostrar la respuesta*/

				include("../VISTA/VALOR_DEVENGADO/frm_devengado.php");
		}
		else
		{
			echo "OJO ERROR ELIMINAR DATOS";
		}//fin else

	}//fin paso informacion
?>