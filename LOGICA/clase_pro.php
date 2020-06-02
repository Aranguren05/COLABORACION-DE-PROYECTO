<?php 

	include("../BASE_DATOS/conexion_bd.php");

	/*creacion de la clase*/

	class Clase_Producto
	{
		/***ATRIBUTOS***/
		private $cod_pro;
		private $nom_pro=array();
		private $precio;
		private $descripcion_pro;
		private $tipo_pro;
		private $fkcod_prov;


		function __construct($cod,$nom,$pre,$des,$tipo,$fkprov)
		{
			$this->cod_pro=$cod;
			$this->nom_pro=$nom;
			$this->precio=$pre;
			$this->descripcion_pro=$des;
			$this->tipo_pro=$tipo;
			$this->fkcod_prov=$fkprov;
		}

		//Metodos de escritura y lectura
		public function setCod_Pro($cod)
		{
			$this->cod_pro=$cod;
		}//fin setCod_prov

		public function getCod_Pro()
		{
			return $this->$cod_pro;
		}//fin metodo getCod_prov

		public function setNom_Pro($nom)
		{
			$this->nom_pro=$nom;
		}

		public function getNom_Pro()
		{
			return $this->$nom_pro;
		}

		public function setPre_Pro($pre)
		{
			$this->precio=$pre;
		}

		public function getPre_Pro()
		{
			return $this->precio;
		}

		public function setDes_Pro($des)
		{
			$this->descripcion_pro=$des;
		}

		public function getDes_Pro()
		{
			return $this->$descripcion_pro;
		}

		public function setTipo_Pro($tipo)
		{
			$this->tipo_pro=$tipo;
		}

		public function getTipo_Pro()
		{
			return $this->$tipo_pro;
		}

		public function setProv_Pro($fkprov)
		{
			$this->fkcod_prov=$fkprov;
		}

		public function getProv_Pro()
		{
			return $this->$fkcod_prov;
		}


		//METODOS

		public function insertar_producto()
		{
			//crear la conexion - instanciar
			$llamar=new Conexion();
			$llamar1=$llamar->con();
			//generar la consulta
			$consulta="insert into producto(nom_pro,precio_pro,descripcion_pro,tipo_pro,fkcod_prov) values('$this->nom_pro','$this->precio','$this->descripcion_pro','$this->tipo_pro','$this->fkcod_prov');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin insertar
	}// fin clase 


	class producto_reporte
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
			$consulta="select pro.pkcod_pro,pro.nom_pro,pro.descripcion_pro,pro.precio_pro,pro.tipo_pro, prov.nom_prov"." FROM producto as pro,proveedores as prov"." WHERE pro.fkcod_prov=prov.pkcod_prov";
			//var_dump($consulta);
			//procersar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//var_dump($res);
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
		}
	}

 ?>