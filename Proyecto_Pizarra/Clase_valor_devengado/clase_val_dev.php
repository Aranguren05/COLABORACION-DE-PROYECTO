<?php 

	/*creacion de la clase*/

	class DEVENGADO
	{
		/***ATRIBUTOS***/
		private $ccoddev;
		private $empdev=array();
		private $fechaidev;
		private $fechafdev;
		private $pagototaldev;

		/***METODOS **/

		/*CODIGO COMPRA*/

		public function INSERTAR($cod_dev)
		{
			$this->coddev=$cod_dev;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->coddev;
		}//FIN MOSTRAR

		/*CODIGO PRODUCTO COMPRA*/

		public function INSERTAR_1($emp_dev)
		{
			$this->empdev=$emp_dev;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->empdev;
		}//FIN MOSTRAR


		/*FECHA COMPRA*/

		public function INSERTAR_2($fechai_dev)
		{
			$this->fechaidev=$fechai_dev;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->fechaidev;
		}//FIN MOSTRAR

		/*PRECIO UNIDAD COMPRA*/

		public function INSERTAR_3($fechaf_dev)
		{
			$this->fechafdev=$fechaf_dev;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->fechafdev;
		}//FIN MOSTRAR

		/*PRECIO FINAL COMPRA*/

		public function INSERTAR_4($pago_total_dev)
		{
			$this->pagototaldev=$pago_total_dev;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->pagototaldev;
		}//FIN MOSTRAR


	}

 ?>
