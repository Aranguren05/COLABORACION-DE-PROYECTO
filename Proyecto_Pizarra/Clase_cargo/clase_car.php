<?php 


	/*creacion de la clase*/

	class CARGO
	{
		/***ATRIBUTOS***/
		private $codcar;
		private $nomcar=array();
		private $sueldo;

		/***METODOS **/

		/*CODIGO CARGO*/

		public function INSERTAR($cod_car)
		{
			$this->codcar=$cod_car;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->codcar;
		}//FIN MOSTRAR

		/*NOMBRE CARGO*/

		public function INSERTAR_1($nom_car)
		{
			$this->nomcar=$nom_car;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->nomcar;
		}//FIN MOSTRAR

		/*Salario cargo*/

		public function INSERTAR_2($sal_car)
		{
			$this->salcar=$sal_car;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->salcar;
		}//FIN MOSTRAR
	}



 ?>
