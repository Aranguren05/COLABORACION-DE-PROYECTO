<?php  

	if (isset($_POST['sub_cargo'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_cargo.php");
		//include("../VISTA/CARGO/frm_cargo.php");
	}

	if (isset($_POST['sub_doc'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_documento.php");
		//include("../VISTA/CARGO/frm_cargo.php");
	}

	if (isset($_POST['sub_prov'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_proveedores.php");
		
	}

	if (isset($_POST['sub_pro'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_producto.php");
		
	}


	if (isset($_POST['sub_dev'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_devengado.php");
	}


	if (isset($_POST['sub_cli'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_clientes.php");
	}


	if (isset($_POST['sub_com'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_compra.php");
	}

	if (isset($_POST['sub_ven'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_ventas.php");
	}

	if (isset($_POST['sub_fac'])) 
	{
		//verificacion del boton sub_inicio
		//echo "verificacion del boton sub_inicio";
		//llamar formulario frm_menu
		
		include("control_facturacion.php");
	}


	/*else
	{
		echo "La pagina seleccionada presenta un error o no existe";
	}*/
?>