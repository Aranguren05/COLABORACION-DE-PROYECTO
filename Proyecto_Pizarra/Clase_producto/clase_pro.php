<?php 

	/*creacion de la clase*/

	class PRODUCTO
	{
		/***ATRIBUTOS***/
		private $codpro;
		private $nompro=array();
		private $preciopro;
		private $descripccionpro;
		private $tipopro;

		/***METODOS **/

		/*CODIGO PRODUCTO*/

		public function INSERTAR($cod_pro)
		{
			$this->codpro=$cod_pro;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->codpro;
		}//FIN MOSTRAR

		/*NOMBRE PRODUCTO*/

		public function INSERTAR_1($nom_pro)
		{
			$this->nompro=$nom_pro;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->nompro;
		}//FIN MOSTRAR


		/*PRECIO*/

		public function INSERTAR_2($precio_pro)
		{
			$this->preciopro=$precio_pro;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->preciopro;
		}//FIN MOSTRAR

		/*Descripccion*/

		public function INSERTAR_3($descripcion_pro)
		{
			$this->descripcionpro=$descripcion_pro;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->descripcionpro;
		}//FIN MOSTRAR

		/*CORREO*/

		public function INSERTAR_4($tipo_pro)
		{
			$this->tipopro=$tipo_pro;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->tipopro;
		}//FIN MOSTRAR


	}

 ?>