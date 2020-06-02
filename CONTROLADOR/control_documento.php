<?php

	include("../LOGICA/clase_doc.php"); 

	if (isset($_POST['sub_doc'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new documento_reporte();
		//llamar funcion reporte_gral()
		$res= $reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/DOCUMENTO/frm_documento.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		$nombre_documento=$_POST['txnom_doc'];


		//enviar el dato para hacer ingresado
		$insertar=new Clase_Documento(NULL,$nombre_documento);
		$res_inser=$insertar->insertar_documento();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new documento_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_gral();
			//donde mostrar la respuesta

			include("../VISTA/DOCUMENTO/frm_documento.php");
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
		$reporte= new documento_reporte();
		//llamar el metodo especifico
		$res=$reporte->reporte_codigo($act);
		//mostrar en el formulario especifico al proceso
		include("../VISTA/DOCUMENTO/frm_actualizar_documento.php");
	}//fin paso informacion

	//validar el pulsar boton sub actualizar
	if(isset($_POST['sub_actualizar']))
	{	
		//recibir los parametros del formulario
		$codigo_documento=$_POST['txcod_doc'];
		$nombre_documento=$_POST['txNomDoc'];
		//enviar los datos para ser procesados
		$actualizar= new Clase_Documento($codigo_documento,$nombre_documento);
		$res_modi=$actualizar->modificar_documento();
		if($res_modi ==1)
		{
			/*invocar clase curso_reporte*/	
			$reporte= new documento_reporte();
			/*llamar funcion reporte_gral()*/
			$res=$reporte->reporte_gral();
			/*donde mostrar la respuesta*/

			include("../VISTA/DOCUMENTO/frm_documento.php");
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
		$reporte= new Clase_Documento($eli,null);
		//llamar el metodo especifico
		$res_eli=$reporte->eliminar_documento();
		if($res_eli==1)
		{
				/*invocar clase curso_reporte*/	
				$reporte= new documento_reporte();
				/*llamar funcion reporte_gral()*/
				$res=$reporte->reporte_gral();
				/*donde mostrar la respuesta*/

				include("../VISTA/DOCUMENTO/frm_documento.php");
		}
		else
		{
			echo "OJO ERROR ELIMINAR DATOS";
		}//fin else

	}//fin paso informacion
?>
