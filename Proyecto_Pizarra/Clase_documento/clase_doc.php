<?php 

	/*creacion de la clase*/

	class DOCUMENTO
	{
		/***ATRIBUTOS***/
		private $coddoc;
		private $nomdoc=array();

		/***METODOS **/

		/*CODIGO CARGO*/

		public function INSERTAR($cod_doc)
		{
			$this->coddoc=$cod_doc;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->coddoc;
		}//FIN MOSTRAR

		/*NOMBRE CARGO*/

		public function INSERTAR_1($nom_doc)
		{
			$this->nomdoc=$nom_doc;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->nomdoc;
		}//FIN MOSTRAR

	}



 ?>
