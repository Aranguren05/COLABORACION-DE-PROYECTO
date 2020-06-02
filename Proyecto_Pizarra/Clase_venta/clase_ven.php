<?php 

	/*creacion de la clase*/

	class VENTA
	{
		/***ATRIBUTOS***/
		private $cantidadven;
		private $codproven=array();
		private $proven;
		private $empven;
		private $codven;

		/***METODOS **/

		/*CODIGO CLIENTE*/

		public function INSERTAR($cantidad_ven)
		{
			$this->cantidadven=$cantidad_ven;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->cantidadven;
		}//FIN MOSTRAR

		/*APELLIDO*/

		public function INSERTAR_1($cod_pro_ven)
		{
			$this->codproven=$cod_pro_ven;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->codproven;
		}//FIN MOSTRAR


		/*NOMBRE*/

		public function INSERTAR_2($pro_ven)
		{
			$this->proven=$pro_ven;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->proven;
		}//FIN MOSTRAR

		/*TELEFONO*/

		public function INSERTAR_3($emp_ven)
		{
			$this->empven=$emp_ven;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->empven;
		}//FIN MOSTRAR

		/*CORREO*/

		public function INSERTAR_4($cod_ven)
		{
			$this->codven=$cod_ven;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->codven;
		}//FIN MOSTRAR


	}

 ?>