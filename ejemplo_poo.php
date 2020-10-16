<?php
	class numeros{
		/*Atributos(caracteristicas) y Métodos(funcionalidades) */
		//Atributos
		private $valor1;
		private $valor2;

		//metodos de acceso para poder interactuar con estos atributos
		public function setValor1($v1){
			$this->valor1=$v1;
		}
		public function getValor1(){
			return $this->valor1;
		}
		public function setValor2($v2){
			$this->valor2=$v2;
		} 
		public function getValor2(){
			return $this->valor2;
		}
		public function pares()
		{
			for ($i=$this->valor1; $i <= $this->valor2; $i++) 
			{ 
				if ($i % 2 == 0) 
				{
					echo $i."<br>";
				}
			}
			return;
		}
		public function impares()
		{
			for ($i=$this->valor1; $i <= $this->valor2; $i++) 
			{ 
				if ($i % 2 != 0) 
				{
					echo $i."<br>";
				}
			}
			return;
		}
	} 

	//instanciar la clase Calculadora (creación de un objeto Calculadora)
	$objeto = new numeros;
	//Asignaron valores por medio de los metodos Set
	$objeto->setValor1($_POST['inicio']);
	$objeto->setValor2($_POST['fin']);
	echo "<br>Los números pares son: <br> ", $objeto->pares();
	echo "<br>Los números impares son: <br> ", $objeto->impares();	
?>