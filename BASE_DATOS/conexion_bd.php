<?php 
	
	//crear la conexion a la base de datos

	class Conexion 
	{
		//metodo con
		public static function con()
		{
			try
			{
				$conexion=mysqli_connect("localhost","root","","pizarra");//servidor,usuario,clave,nombre _bd
				return $conexion;
			}//fin try
			catch(exception $e)
			{
				echo "error al conectar a la BD $e" .$e;
			}//
		}//Fin funcion cod 
	}//Fin clase Conexionn

	//PREUBA DE CONEXION A LA BD
	/*
	$prueba= new Conexion();
	if ($prueba->con()) 
	{
		echo "si hay conexion a la base de datos pizarra";
	}
	else
	{
		echo "no se pudo conectar";
	}
	*/
?>