<?php 

	include("../BASE_DATOS/conexion_bd.php");
	/*creacion de la clase*/

	class Clase_Cargo
	{
		/***ATRIBUTOS***/
		private $cod_car;
		private $nom_car=array();
		private $sueldo;

		function __construct($cod,$nom,$suel)
		{
			$this->cod_car=$cod;
			$this->nom_car=$nom;
			$this->sueldo=$suel;
		}

		//Metodos de escritura y lectura
		public function setCod_Car($cod)
		{
			$this->cod_car=$cod;
		}//fin setCod_car

		public function getCod_Car()
		{
			return $this->cod_car;
		}//fin metodo getCod_car

		public function setNom_Car($nom)
		{
			$this->nom_car=$nom;
		}//fin get setNom_cur

		public function getNom_Car()
		{
			return $this->nom_car;
		}//fin metodo getNom_car

		public function setSuel($suel)
		{
			$this->sueldo=$suel;
		}//fin get setSuel

		public function getSuel()
		{
			return $this->sueldo;
		}//fin metodo getSuel


		//METODOS

		public function insertar_cargo()
		{
			//crear la conexion - instanciar
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="insert into cargo(nom_car,sueldo) values('$this->nom_car','$this->sueldo');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin insertar

		//METODO MODIFICAR

		public function modificar_cargo()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="update cargo set nom_car='$this->nom_car', sueldo='$this->sueldo' where pkcod_car='$this->cod_car';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

		
		//METODO ELIMINAR

		public function eliminar_cargo()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="delete from cargo where pkcod_car='$this->cod_car';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

	}//fin clase_Cargo

	class cargo_reporte
	{
		private $mostrar;
		public function __construct()
		{
			$this->mostrar=array();
		}

		public function reporte_gral()
		{
			//crear la conexion a la bd
			//instanciar la clase conexion
			$llamar=new Conexion();
			$llamar1=$llamar->con();
			//generar la consulta
			$consulta="select * from cargo";
			//procersar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar una respuesta
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
		}//fin reporte general

		//metodo de consulta para el metodo modificar

		public function reporte_codigo($act1)
		{
			//Crear la conexion a la bd
			//instanciar la bd
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="select * from cargo where pkcod_car='$act1'";
			//procesar
			$res=mysqli_query($llamar1,$consulta);
			//devolver la respuesta
			return mysqli_fetch_row($res);
		}
	}//fin clase cargo reporte



 ?>
