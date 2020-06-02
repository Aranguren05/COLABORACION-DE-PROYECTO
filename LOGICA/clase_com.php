<?php 

	include("../BASE_DATOS/conexion_bd.php");

	/*creacion de la clase*/

	class Clase_Compra
	{
		/***ATRIBUTOS***/
		private $cod_com;
		private $pro=array();
		private $can_pro;
		private $fecha_com;
		private $preu_com;
		private $pref_com;

		function __construct($cod,$pro,$can,$fecha,$preu,$pref)
		{
			$this->cod_com=$cod;
			$this->pro_com=$pro;
			$this->can_pro=$can;
			$this->fecha_com=$fecha;
			$this->preu_com=$preu;
			$this->pref_com=$pref;
		}

		public function setCod_Com($cod)
		{
			$this->cod_com=$cod;
		}//fin setCod_Com

		public function getCod_Com()
		{
			return $this->$cod_cod;
		}//fin metodo getCod_Com


		public function setPro_Com($pro)
		{
			$this->pro_com=$pro;
		}

		public function getPro_Com()
		{
			return $this->$pro_com;
		}

		public function setCan_Com($can)
		{
			$this->can_pro=$can;
		}

		public function getCan_Com()
		{
			return $this->$can_pro;
		}

		public function setFec_Com($fecha)
		{
			$this->fecha_com=$fecha;
		}

		public function getFec_Com()
		{
			return $this->$fecha_com;
		}

		public function setPreu_Com($preu)
		{
			$this->preu_com=$preu;
		}

		public function getPreu_Com()
		{
			return $this->$preu;
		}

		public function setPref_Com($pref)
		{
			$this->pref_com=$pref;
		}

		public function getPref_Com()
		{
			return $this->$pref_com;
		}
	
		//METODOS

		public function insertar_compra()
		{
			//crear la conexion - instanciar
			$llamar= new Conexion();
			$llamar1=$llamar->con();
			//generar la consulta
			$consulta="insert into compra(pro_com,can_pro,fecha_com,preu_com,pref_com) 
			values('$this->pro_com','$this->can_pro','$this->fecha_com','$this->preu_com','$this->pref_com');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin insertar

	}//fin clase compra

	class compra_reporte
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
			$consulta="select * from compra";
			//procersar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar una respuesta
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
		}
	}//fin reporte

 ?>
