<?php 

	/*creacion de la clase*/

	class FACTURACION
	{
		/***ATRIBUTOS***/
		private $codfac;
		private $empfac=array();
		private $clifac;
		private $preufac;
		private $preffac;
		private $fechafac;
		private $horafac;

		/***METODOS **/

		/*CODIGO FACTURA*/

		public function INSERTAR($cod_fac)
		{
			$this->codfac=$cod_fac;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->codfac;
		}//FIN MOSTRAR

		/*APELLIDO*/

		public function INSERTAR_1($emp_fac)
		{
			$this->empfac=$emp_fac;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->empfac;
		}//FIN MOSTRAR


		/*cliente*/

		public function INSERTAR_2($cli_fac)
		{
			$this->clifac=$cli_fac;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->clifac;
		}//FIN MOSTRAR

		/*precio unidad*/

		public function INSERTAR_3($preu_fac)
		{
			$this->preufac=$preu_fac;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->preufac;
		}//FIN MOSTRAR

		/*precio total*/

		public function INSERTAR_4($pref_fac)
		{
			$this->preffac=$pref_fac;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->preffac;
		}//FIN MOSTRAR

		/*fecha*/

		public function INSERTAR_5($fecha_fac)
		{
			$this->fechafac=$fecha_fac;
		}//FIN INSERTAR
		

		public function MOSTRAR_5()
		{
			return $this->fechafac;
		}//FIN MOSTRAR

		/*Hora*/

		public function INSERTAR_6($hora_fac)
		{
			$this->horafac=$hora_fac;
		}//FIN INSERTAR
		

		public function MOSTRAR_6()
		{
			return $this->horafac;
		}//FIN MOSTRAR


	}

 ?>