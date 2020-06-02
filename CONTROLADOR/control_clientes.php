<?php

	include("../LOGICA/clase_cli.php"); 

	if (isset($_POST['sub_cli'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new clientes_reporte();
		//llamar funcion reporte_gral()
		$res= $reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/CLIENTES/frm_clientes.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		//$codigo_cargo=$_POST['txcod_car'];
		$ape_cli=$_POST['txape_cli'];
		$nombre_cli=$_POST['txnom_cli'];
		$tel_cli=$_POST['tel_cli'];
		$cor_cli=$_POST['txcor_cli'];
		$doc_cli=$_POST['doc_cli'];
		$num_cod_cli=$_POST['num_doc_cli'];

		//enviar el dato para hacer ingresado
		$insertar=new Clase_Clientes(NULL,$ape_cli,$nombre_cli,$tel_cli,$cor_cli,$doc_cli,$num_cod_cli);
		$res_inser=$insertar->insertar_clientes();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new clientes_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_gral();
			//donde mostrar la respuesta

			include("../VISTA/CLIENTES/frm_clientes.php");
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
		$reporte= new clientes_reporte();
		//llamar el metodo especifico
		$res=$reporte->reporte_codigo($act);
		//mostrar en el formulario especifico al proceso
		include("../VISTA/CLIENTES/frm_actualizar_clientes.php");
	}//fin paso informacion


	//validar el pulsar boton sub actualizar
	if(isset($_POST['sub_actualizar']))
	{	
		//recibir los parametros del formulario
		$codigo_cliente=$_POST['txcod_cli'];
		$apellido_cliente=$_POST['txape_cli'];
		$nombre_cliente=$_POST['txnom_cli'];
		$telefono_cliente=$_POST['tel_cli'];
		$correo_cliente=$_POST['txcor_cli'];
		$documento_cliente=$_POST['documento'];
		$num_doc_cli=$_POST['numero_documento'];
		
		//enviar los datos para ser procesados
		$actualizar= new Clase_Clientes($codigo_cliente,$apellido_cliente,$nombre_cliente,$telefono_cliente,$correo_cliente,$documento_cliente,$num_doc_cli);
		$res_modi=$actualizar->modificar_clientes();
		if($res_modi ==1)
		{
			/*invocar clase curso_reporte*/	
			$reporte= new clientes_reporte();
			/*llamar funcion reporte_gral()*/
			$res=$reporte->reporte_gral();
			/*donde mostrar la respuesta*/

			include("../VISTA/CLIENTES/frm_clientes.php");
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
		$reporte= new Clase_Clientes($eli,null,null,null,null,null,null);
		//llamar el metodo especifico
		$res_eli=$reporte->eliminar_clientes();
		if($res_eli==1)
		{
				/*invocar clase curso_reporte*/	
				$reporte= new clientes_reporte();
				/*llamar funcion reporte_gral()*/
				$res=$reporte->reporte_gral();
				/*donde mostrar la respuesta*/
				include("../VISTA/CLIENTES/frm_clientes.php");
		}
		else
		{
			echo "OJO ERROR ELIMINAR DATOS";
		}//fin else

	}//fin paso informacion
?>