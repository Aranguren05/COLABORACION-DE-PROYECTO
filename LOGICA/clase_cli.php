<?php 
	
	include("../BASE_DATOS/conexion_bd.php");
	/*creacion de la clase*/

	class Clase_Clientes
	{
		/***ATRIBUTOS***/
		private $cod_cli;
		private $ape_cli=array();
		private $nom_cli;
		private $tel_cli;
		private $cor_cli;
		private $fkcod_doc;
		private $num_doc_cli;

		function __construct($cod,$ape,$nom,$tel,$cor,$doc,$num_doc)
		{
			$this->cod_cli=$cod;
			$this->ape_cli=$ape;
			$this->nom_cli=$nom;
			$this->tel_cli=$tel;
			$this->cor_cli=$cor;
			$this->fkcod_doc=$doc;
			$this->num_doc_cli=$num_doc;
		}

		//Metodos de escritura y lectura
		public function setCod_Cli($cod)
		{
			$this->cod_cli=$cod;
		}//fin setCod_Cli

		public function getCod_Cli()
		{
			return $this->cod_cli;
		}//fin metodo getCod_Cli

		public function setApe_Cli($ape)
		{
			$this->ape_cli=$ape;
		}

		public function getApe_Cli()
		{
			return $this->ape_cli;
		}

		public function setNom_Cli($nom)
		{
			$this->nom_cli=$nom;
		}

		public function getNom_Cli()
		{
			return $this->nom_cli;
		}


		public function setTel_Cli($tel)
		{
			$this->tel_cli=$tel;
		}

		public function getTel_Cli()
		{
			return $this->tel_cli;
		}


		public function setCor_Cli($cor)
		{
			$this->cor_cli=$cor;
		}

		public function getCor_Cli()
		{
			return $this->cor_cli;
		}


		public function setDoc_Cli($doc)
		{
			$this->fkcod_doc=$doc;
		}

		public function getDoc_Cli()
		{
			return $this->fkcod_cli;
		}


		public function setNum_doc_Cli($num_doc)
		{
			$this->num_doc_cli=$num_doc;
		}

		public function getNum_doc_Cli()
		{
			return $this->num_doc;
		}

		//METODOS

		public function insertar_clientes()
		{
			//crear la conexion - instanciar
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			//generar la consulta
			$consulta="insert into clientes(ape_cli,nom_cli,tel_cli,cor_cli,fkdoc_cli,num_doc_cli) values('$this->ape_cli','$this->nom_cli','$this->tel_cli','$this->cor_cli','$this->fkcod_doc','$this->num_doc_cli');";
			//var_dump($consulta);
			//procesar la consulta
			$res=mysqli_query($llamar1,$consulta);
			//retornar la respuesta
			return $res;
		}//fin  insertar
		
		//METODO DE MODIFICAR

		public function modificar_clientes()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="update clientes set ape_cli='$this->ape_cli', nom_cli='$this->nom_cli', tel_cli='$this->tel_cli', fkdoc_cli='$this->fkcod_doc', num_doc_cli='$this->num_doc_cli' where pkcod_cli='$this->cod_cli';";
			//var_dump($consulta);
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}

		//METODO ELIMINAR

		public function eliminar_clientes()
		{
			/*crear la conexion - instanciar*/
			$llamar= new Conexion();
			$llamar1= $llamar->con();
			/*generar la consulta*/
			$consulta="delete from clientes where pkcod_cli='$this->cod_cli';";
			/*procesar la consulta*/
			$res=mysqli_query($llamar1,$consulta);
			/*retornar una respuesta*/
			return $res;
		}
	}//fin clase clientes

	class clientes_reporte
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
			$consulta="select cli.pkcod_cli,cli.ape_cli,cli.nom_cli,cli.cor_cli,doc.nom_doc,cli.num_doc_cli"." FROM clientes as cli,tipo_documento as doc"." WHERE cli.fkdoc_cli=doc.pkcod_doc";;
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
			$consulta="select * from clientes where pkcod_cli='$act1'";
			//procesar
			$res=mysqli_query($llamar1,$consulta);
			//devolver la respuesta
			return mysqli_fetch_row($res);
		}

	}//fin reporte

 ?>