<?php
Class CalculadoraController{
	public $entrada;
	public $accion;
	public $resultado;
	public $pantalla;

	function __construct(){
	$this->entrada = 0;
	$this->accion = "";
	$this->resultado = 0;
	$this->pantalla = "0";

	}
//CAMBIAMOS EL GET QUE ESTABA POR DEFAULT POR EL POST YA QUE GET MUESTRA LA INFORMACIÓN DE LAS ACCIONES EN LA URL

	public function cachaParametros(){
		if (isset($_POST["pantalla"])) {
			$this->pantalla = $_POST["pantalla"];
		}
		if (isset($_POST["resultado"])) {
			$this->resultado = $_POST["resultado"];
		}
		if (isset($_POST["entrada"])) {
			$this->entrada = $_POST["entrada"];
		}
		if (isset($_POST["accion"])) {
			$this->accion = $_POST["accion"];
		}

	}
	public function ejecutaOperacion(){

		switch ($this->accion) {
			case "suma": $this->suma();
			break;
			case "resta":  $this->resta();
			break;
			case "multiplica":  $this->multiplica();
			break;
			case "divide":  $this->divide();
			break;
			case "reset":  $this->reset();
			break;
			default: 
			break;
		}
	}

	private function suma(){
		$this->pantalla = $this->pantalla . " + " . $this->entrada;
		$this->resultado = $this->resultado + $this->entrada;
	}
	private function resta(){
		$this->pantalla = $this->pantalla . " - " . $this->entrada;
		$this->resultado = $this->resultado - $this->entrada;
	}
	

	private function multiplica(){
		$this->pantalla = $this->pantalla . " * " . $this->entrada;
		$this->resultado = $this->resultado * $this->entrada;
	}
	

	private function divide(){
		$this->pantalla = $this->pantalla . " / " . $this->entrada;
		$this->resultado = $this->resultado / $this->entrada;
	}
	
	private function reset(){
	$this->entrada = 0;
	$this->accion = "";
	$this->resultado = 0;
	$this->pantalla = "0";
	}

}