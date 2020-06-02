<?php 

	/*creacion de la clase*/

	class PROVEEDORES
	{
		/***ATRIBUTOS***/
		private $codprov;
		private $apeprov;
		private $nomprov;
		private $dirprov;
		private $telprov;
		private $corprov;

		/***METODOS **/

		/*CODIGO PROVEEDOR*/

		public function INSERTAR($cod_prov)
		{
			$this->codprov=$cod_prov;
		}//FIN INSERTAR
		

		public function MOSTRAR()
		{
			return $this->codprov;
		}//FIN MOSTRAR

		/*APELLIDO*/

		public function INSERTAR_1($ape_prov)
		{
			$this->apeemp=$ape_prov;
		}//FIN INSERTAR
		

		public function MOSTRAR_1()
		{
			return $this->apeprov;
		}//FIN MOSTRAR


		/*Nombres*/

		public function INSERTAR_2($nom_prov)
		{
			$this->nomprov=$nom_prov;
		}//FIN INSERTAR
		

		public function MOSTRAR_2()
		{
			return $this->nomprov;
		}//FIN MOSTRAR

		/*direccion*/

		public function INSERTAR_3($dir_prov)
		{
			$this->dirprov=$dir_prov;
		}//FIN INSERTAR
		

		public function MOSTRAR_3()
		{
			return $this->dirprov;
		}//FIN MOSTRAR

		/*telefono*/

		public function INSERTAR_4($tel_prov)
		{
			$this->telprov=$tel_prov;
		}//FIN INSERTAR
		

		public function MOSTRAR_4()
		{
			return $this->telprov;
		}//FIN MOSTRAR

		/*correo*/

		public function INSERTAR_5($cor_prov)
		{
			$this->corprov=$cor_prov;
		}//FIN INSERTAR
		

		public function MOSTRAR_5()
		{
			return $this->corprov;
		}//FIN MOSTRAR


	}

 ?>
