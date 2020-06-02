<?php 

	/*creacion de la clase*/

	class COMPRA
	{
		/***ATRIBUTOS***/
		private $codcom;
		private $codprocom=array();
		private $fechacom;
		private $preucom;
		private $prefcom;

		/***METODOS **/

		/*CODIGO COMPRA*/

		public function INSERTAR($cod_com)
		{
			$this->codcom=$cod_com;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->codcom;
		}//FIN MOSTRAR

		/*CODIGO PRODUCTO COMPRA*/

		public function INSERTAR_1($cod_pro_com)
		{
			$this->codprocom=$cod_pro_com;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->codprocom;
		}//FIN MOSTRAR


		/*FECHA COMPRA*/

		public function INSERTAR_2($fecha_com)
		{
			$this->fechacom=$fecha_com;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->fechacom;
		}//FIN MOSTRAR

		/*PRECIO UNIDAD COMPRA*/

		public function INSERTAR_3($preu_com)
		{
			$this->preucom=$preu_com;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->preucom;
		}//FIN MOSTRAR

		/*PRECIO FINAL COMPRA*/

		public function INSERTAR_4($pref_com)
		{
			$this->prefcom=$pref_com;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->prefcom;
		}//FIN MOSTRAR


	}

 ?>
