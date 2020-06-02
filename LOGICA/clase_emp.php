<?php 

	/*creacion de la clase*/

	class EMPLEADOS
	{
		/***ATRIBUTOS***/
		private $codemp;
		private $apeemp=array();
		private $nomemp;
		private $telemp;
		private $coremp;
		private $diremp;

		/***METODOS **/

		/*CODIGO EMPLEADO*/

		public function INSERTAR($cod_emp)
		{
			$this->codemp=$cod_emp;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->codemp;
		}//FIN MOSTRAR

		/*APELLIDO*/

		public function INSERTAR_1($ape_emp)
		{
			$this->apeemp=$ape_emp;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->apeemp;
		}//FIN MOSTRAR


		/*Nombres*/

		public function INSERTAR_2($nom_emp)
		{
			$this->nomemp=$nom_emp;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->nomemp;
		}//FIN MOSTRAR

		/*Telegono empleado*/

		public function INSERTAR_3($tel_emp)
		{
			$this->telemp=$tel_emp;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->telemp;
		}//FIN MOSTRAR

		/*correo*/

		public function INSERTAR_4($cor_emp)
		{
			$this->coremp=$cor_emp;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->coremp;
		}//FIN MOSTRAR

		/*Direccion*/

		public function INSERTAR_5($dir_emp)
		{
			$this->diremp=$dir_emp;
		}//FIN INSERTAR
		

		public function MOSTRAR_5()
		{
			return $this->diremp;
		}//FIN MOSTRAR


	}

 ?>
