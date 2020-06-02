<?php

	include("../LOGICA/clase_prov.php"); 

	if (isset($_POST['sub_prov'])) 
	{
		//verificacion del boton agregar
		//echo "Si sirve";

		//invocar clase curso_reporte
		$reporte= new proveedores_reporte();
		//llamar funcion reporte_gral()
		$res= $reporte->reporte_gral();
		//donde mostrar la respuesta

		include("../VISTA/PROVEEDORES/frm_proveedores.php");
	}//fin if boton agregar

	if (isset($_POST['agregar'])) 
	{
		//recibir parametros y pasar a variables
		//$codigo_cargo=$_POST['txcod_car'];
		$nom_prov=$_POST['txnom_prov'];
		$ape_prov=$_POST['txape_prov'];
		$cor_prov=$_POST['txcor_prov'];
		$dir_prov=$_POST['txdir_prov'];
		$tel_prov=$_POST['tel_prov'];



		//enviar el dato para hacer ingresado
		$insertar=new Clase_Proveedores(NULL,$ape_prov,$nom_prov,$dir_prov,$tel_prov,$cor_prov);
		$res_inser=$insertar->insertar_proveedores();
		//validar respuesta de insercion
		if ($res_inser==1) 
		{	
			//invocar clase cargo_reporte
			$reporte= new proveedores_reporte();
			//llamar funcion reporte_gral()
			$res=$reporte->reporte_gral();
			//donde mostrar la respuesta

			include("../VISTA/PROVEEDORES/frm_proveedores.php");
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
		$reporte= new proveedores_reporte();
		//llamar el metodo especifico
		$res=$reporte->reporte_codigo($act);
		//mostrar en el formulario especifico al proceso
		include("../VISTA/PROVEEDORES/frm_actualizar_proveedores.php");
	}//fin paso informacion


	//validar el pulsar boton sub actualizar
	if(isset($_POST['sub_actualizar']))
	{	
		//recibir los parametros del formulario
		$codigo_proveedor=$_POST['txcod_prov'];
		$apellido_proveedor=$_POST['txape_prov'];
		$nombre_proveedor=$_POST['txnom_prov'];
		$correo_proveedor=$_POST['txcor_prov'];
		$direccion_proveedor=$_POST['txdir_prov'];
		$telefono_proveedor=$_POST['tel_prov'];
		//enviar los datos para ser procesados
		$actualizar= new Clase_Proveedores($codigo_proveedor,$apellido_proveedor,$nombre_proveedor,$direccion_proveedor,$telefono_proveedor,$correo_proveedor);
		$res_modi=$actualizar->modificar_proveedores();
		if($res_modi ==1)
		{
			/*invocar clase curso_reporte*/	
			$reporte= new proveedores_reporte();
			/*llamar funcion reporte_gral()*/
			$res=$reporte->reporte_gral();
			/*donde mostrar la respuesta*/

			include("../VISTA/PROVEEDORES/frm_proveedores.php");
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
		$reporte= new Clase_Proveedores($eli,null,null,null,null,null);
		//llamar el metodo especifico
		$res_eli=$reporte->eliminar_proveedores();
		if($res_eli==1)
		{
				/*invocar clase curso_reporte*/	
				$reporte= new proveedores_reporte();
				/*llamar funcion reporte_gral()*/
				$res=$reporte->reporte_gral();
				/*donde mostrar la respuesta*/
				include("../VISTA/PROVEEDORES/frm_proveedores.php");
		}
		else
		{
			echo "OJO ERROR ELIMINAR DATOS";
		}//fin else

	}//fin paso informacion


?>