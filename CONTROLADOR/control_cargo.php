<?php

	include("../LOGICA/clase_car.php"); 

	if (isset($_POST['sub_cargo'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new cargo_reporte();
		//llamar funcion reporte_gral()
		$res= $reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/CARGO/frm_cargo.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		//$codigo_cargo=$_POST['txcod_car'];
		$nombre_cargo=$_POST['txnom_car'];
		$sueldo=$_POST['txsueldo'];


		//enviar el dato para hacer ingresado
		$insertar=new Clase_Cargo(NULL,$nombre_cargo,$sueldo);
		$res_inser=$insertar->insertar_cargo();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new cargo_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_gral();
			//donde mostrar la respuesta

			include("../VISTA/CARGO/frm_cargo.php");
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
		$reporte= new cargo_reporte();
		//llamar el metodo especifico
		$res=$reporte->reporte_codigo($act);
		//mostrar en el formulario especifico al proceso
		include("../VISTA/CARGO/frm_actualizar_cargo.php");
	}//fin paso informacion

	//validar el pulsar boton sub actualizar
	if(isset($_POST['sub_actualizar']))
	{	
		//recibir los parametros del formulario
		$codigo_cargo=$_POST['txcod_car'];
		$nombre_cargo=$_POST['txNomCar'];
		$sueldo_cargo=$_POST['sueldo'];
		//enviar los datos para ser procesados
		$actualizar= new Clase_Cargo($codigo_cargo,$nombre_cargo,$sueldo_cargo);
		$res_modi=$actualizar->modificar_cargo();
		if($res_modi ==1)
		{
			/*invocar clase curso_reporte*/	
			$reporte= new cargo_reporte();
			/*llamar funcion reporte_gral()*/
			$res=$reporte->reporte_gral();
			/*donde mostrar la respuesta*/

			include("../VISTA/CARGO/frm_cargo.php");
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
		$reporte= new Clase_Cargo($eli,null,null);
		//llamar el metodo especifico
		$res_eli=$reporte->eliminar_cargo();
		if($res_eli==1)
		{
				/*invocar clase curso_reporte*/	
				$reporte= new cargo_reporte();
				/*llamar funcion reporte_gral()*/
				$res=$reporte->reporte_gral();
				/*donde mostrar la respuesta*/

				include("../VISTA/CARGO/frm_cargo.php");
		}
		else
		{
			echo "OJO ERROR ELIMINAR DATOS";
		}//fin else

	}//fin paso informacion
?>