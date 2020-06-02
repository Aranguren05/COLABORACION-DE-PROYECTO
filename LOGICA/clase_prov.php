<?php 
	
	include("../BASE_DATOS/conexion_bd.php");
	/*creacion de la clase*/

	class Clase_Proveedores
	{
		/***ATRIBUTOS***/
		private $cod_prov;
		private $ape_prov;
		private $nom_prov;
		private $dir_prov;
		private $tel_prov;
		private $cor_prov;

		function __construct($cod,$ape,$nom,$dir,$tel,$cor)
		{
			$this->cod_prov=$cod;
			$this->ape_prov=$ape;
			$this->nom_prov=$nom;
			$this->dir_prov=$dir;
			$this->tel_prov=$tel;
			$this->cor_prov=$cor;
		}

		//Metodos de escritura y lectura
		public function setCod_Prov($cod)
		{
			$this->cod_prov=$cod;
		}//fin setCod_prov

		public function getCod_Prov()
		{
			return $this->cod_prov;
		}//fin metodo getCod_prov

		public function setApe_Prov($ape)
		{
			$this->ape_prov=$ape;
		}

		public function getApe_Prov()
		{
			return $this->ape_prov;
		}

		public function setNom_Prov($nom)
		{
			$this->nom_prov=$nom;
		}

		public function getNom_Prov()
		{
			return $this->nom_prov;
		}

		public function setDir_Prov($dir)
		{
			$this->dir_prov=$dir;
		}

		public function getDir_Prov()
		{
			return $this->dir_prov;
		}


		public function setTel_Prov($tel)
		{
			$this->tel_prov=$tel;
		}

		public function getTel_Prov()
		{
			return $this->tel_prov;
		}

		public function setCor_Prov($cor)
		{
			$this->cor_prov=$cor;
		}

		public function getCor_Prov()
		{
			return $this->cor_prov;
		}

		//METODOS

		public function insertar_proveedores()
		{
			//crear la conexion - instanciar
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="insert into proveedores(ape_prov,nom_prov,dir_prov,tel_prov,cor_prov) 
			values('$this->ape_prov','$this->nom_prov','$this->dir_prov','$this->tel_prov','$this->cor_prov');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin insertar

		//METODO DE MODIFICAR

		public function modificar_proveedores()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="update proveedores set nom_prov='$this->nom_prov', ape_prov='$this->ape_prov', cor_prov='$this->cor_prov', dir_prov='$this->dir_prov', tel_prov='$this->tel_prov' where pkcod_prov='$this->cod_prov';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

		//METODO ELIMINAR

		public function eliminar_proveedores()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="delete from proveedores where pkcod_prov='$this->cod_prov';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}
	}//fin clase proveedores


	class proveedores_reporte
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
			$consulta="select * from proveedores";
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
			$consulta="select * from proveedores where pkcod_prov='$act1'";
			//procesar
			$res=mysqli_query($llamar1,$consulta);
			//devolver la respuesta
			return mysqli_fetch_row($res);
		}
	}//fin reporte
 ?>
