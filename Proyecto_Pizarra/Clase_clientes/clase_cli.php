<?php 

	/*creacion de la clase*/

	class CLIENTE
	{
		/***ATRIBUTOS***/
		private $codcli;
		private $apecli=array();
		private $nomcli;
		private $telcli;
		private $corcli;

		/***METODOS **/

		/*CODIGO CLIENTE*/

		public function INSERTAR($cod_cli)
		{
			$this->codcli=$cod_cli;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->codcli;
		}//FIN MOSTRAR

		/*APELLIDO*/

		public function INSERTAR_1($ape_cli)
		{
			$this->apecli=$ape_cli;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->apecli;
		}//FIN MOSTRAR


		/*NOMBRE*/

		public function INSERTAR_2($nom_cli)
		{
			$this->nomcli=$nom_cli;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->nomcli;
		}//FIN MOSTRAR

		/*TELEFONO*/

		public function INSERTAR_3($tel_cli)
		{
			$this->telcli=$tel_cli;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->telcli;
		}//FIN MOSTRAR

		/*CORREO*/

		public function INSERTAR_4($cor_cli)
		{
			$this->corcli=$cor_cli;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->corcli;
		}//FIN MOSTRAR


	}

 ?>