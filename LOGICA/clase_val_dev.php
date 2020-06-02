<?php 

	include("../BASE_DATOS/conexion_bd.php");
	/*creacion de la clase*/

	class Clase_Devengado
	{
		/***ATRIBUTOS***/
		private $cod_dev;
		private $emp_dev=array();
		private $fechai_dev;
		private $fechaf_dev;
		private $pagototal_dev;

		function __construct($cod,$emp,$fechai,$fechaf,$total)
		{
			$this->cod_dev=$cod;
			$this->emp_dev=$emp;
			$this->fechai_dev=$fechai;
			$this->fechaf_dev=$fechaf;
			$this->pagototal_dev=$total;
		}

		//Metodos de escritura y lectura
		public function setCod_Dev($cod)
		{
			$this->cod_dev=$cod;
		}//fin setCod_Dev

		public function getCod_Dev()
		{
			return $this->cod_dev;
		}//fin metodo getCod_Dev

		public function setEmp_Dev($emp)
		{
			$this->emp_dev=$emp;
		}

		public function getEmp_Dev()
		{
			return $this->emp_dev;
		}

		public function setFechai_Dev($fechai)
		{
			$this->fechai_dev=$fechai;
		}

		public function getFechai_Dev()
		{
			return $this->fechai_dev;
		}

		public function setFechaf_Dev($fechaf)
		{
			$this->fechaf_dev=$fechaf;
		}

		public function getFechaf_Dev()
		{
			return $this->fechaf_dev;
		}

		public function setTotal_Dev($total)
		{
			$this->pagototal_dev=$total;
		}

		public function getTotal_Dev()
		{
			return $this->pagototal_dev;
		}

		//METODOS

		public function insertar_devengado()
		{
			//crear la conexion - instanciar
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="insert into valor_devengado(emp_dev,fechai_dev,fechaf_dev,pagototal_dev) 
			values('$this->emp_dev','$this->fechai_dev','$this->fechaf_dev','$this->pagototal_dev');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin insertar

		//METODO MODIFICAR

		public function modificar_devengado()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="update valor_devengado set emp_dev='$this->emp_dev', fechai_dev='$this->fechai_dev', fechaf_dev='$this->fechaf_dev', pagototal_dev='$this->pagototal_dev' where pkcod_dev='$this->cod_dev';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

		//METODO ELIMINAR

		public function eliminar_devengado()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="delete from valor_devengado where pkcod_dev='$this->cod_dev';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

	}//fi clase devengado

	class devengado_reporte
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
			$consulta="select * from valor_devengado";
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
			$consulta="select * from valor_devengado where pkcod_dev='$act1'";
			//procesar
			$res=mysqli_query($llamar1,$consulta);
			//devolver la respuesta
			return mysqli_fetch_row($res);
		}
	}//fin reporte

 ?>

