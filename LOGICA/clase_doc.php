<?php 

	include("../BASE_DATOS/conexion_bd.php");
	/*creacion de la clase*/

	class Clase_Documento
	{
		/***ATRIBUTOS***/
		private $cod_doc;
		private $nom_doc=array();

		function __construct($cod,$nom)
		{
			$this->cod_doc=$cod;
			$this->nom_doc=$nom;
		}//fin constructor
		
		//Metodos de escritura y lectura
		public function setCod_Doc($cod)
		{
			$this->cod_doc=$cod;
		}//fin setCod_car

		public function getCod_Doc()
		{
			return $this->cod_doc;
		}//fin metodo getCod_car

		public function setNom_Doc($nom)
		{
			$this->nom_doc=$nom;
		}//fin get setNom_cur

		public function getNom_Doc()
		{
			return $this->nom_doc;
		}//fin metodo getNom_car

		//METODOS

		public function insertar_documento()
		{
			//crear la conexion - instanciar
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="insert into tipo_documento(nom_doc) values('$this->nom_doc');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin insertar

		//METODO MODIFICAR

		public function modificar_documento()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="update tipo_documento set nom_doc='$this->nom_doc' where pkcod_doc='$this->cod_doc';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

		//METODO ELIMINAR

		public function eliminar_documento()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="delete from tipo_documento where pkcod_doc='$this->cod_doc';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

	}//fin clase_Documento

	class documento_reporte
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
			$consulta="select * from tipo_documento";
			//procersar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar una respuesta
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
		}

			//metodo de consulta para el metodo modificar

		public function reporte_codigo($act1)
		{
			//Crear la conexion a la bd
			//instanciar la bd
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="select * from tipo_documento where pkcod_doc='$act1'";
			//procesar
			$res=mysqli_query($llamar1,$consulta);
			//devolver la respuesta
			return mysqli_fetch_row($res);
		}
	}//fin clase reporte



 ?>
