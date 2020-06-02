<?php 
	
	include("../BASE_DATOS/conexion_bd.php");
	/*creacion de la clase*/

	class Clase_Ventas
	{
		/***ATRIBUTOS***/
		private $cod_ve;
		private $can_ven;
		private $codpro_ven=array();
		private $emp_ven;
		private $fkcod_cli;
		private $fkcod_fac;

		function __construct($cod,$can,$codpro,$emp,$cli,$fac)
		{
			$this->cod_ven=$cod;
			$this->can_ven=$can;
			$this->codpro_ven=$codpro;
			$this->emp_ven=$emp;
			$this->fkcod_cli=$cli;
			$this->fkcod_fac=$fac;
		}

		//Metodos de escritura y lectura
		public function setCod_Ven($cod)
		{
			$this->cod_ven=$cod;
		}//fin setCod_prov

		public function getCod_Ven()
		{
			return $this->$cod_ven;
		}//fin metodo getCod_Ven

		public function setCan_Ven($can)
		{
			$this->can_ven=$can;
		}

		public function getCan_Ven()
		{
			return $this->$can_ven;
		}

		public function setCodPro_Ven($codpro)
		{
			$this->codpro_ven=$codpro;
		}

		public function getCodPro_Ven()
		{
			return $this->$codpro_ven;
		}
		
		public function setEmp_Ven($emp)
		{
			$this->emp_ven=$emp;
		}

		public function getEmp_Ven()
		{
			return $this->$emp_ven;
		}

		public function setCodCli_Ven($cli)
		{
			$this->fkcod_cli=$cli;
		}

		public function getCodCli_Ven()
		{
			return $this->$fkcod_cli;
		}

		public function setCodFac_Ven($fac)
		{
			$this->fkcod_fac=$fac;
		}

		public function getCodFac_Ven()
		{
			return $this->$fkcod_fac;
		}


		//METODOS

		public function insertar_ventas()
		{
			//crear la conexion - instanciar
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="insert into ventas(cod_ven,fkcod_fac,can_ven,codpro_ven,emp_ven,fkcod_cli) 
			values('$this->cod_ven','$this->fkcod_fac','$this->can_ven','$this->codpro_ven','$this->emp_ven','$this->fkcod_cli');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin insertar
	}//fin clase ventas


	class ventas_reporte
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
			$consulta="select * from ventas";
			//procersar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar una respuesta
			return mysqli_fetch_all($res,MYSQLI_ASSOC);
		}
	}//fin reporte

 ?>