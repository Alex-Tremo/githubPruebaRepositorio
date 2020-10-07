<?php
Class ConversorController{
	public $entrada2;
	public $accion2;
	public $resultado2;
	public $pantalla2;
	public $error;


	public $selectU1;
	public $selectU2;


	function __construct(){
	$this->entrada2 = 0;
	$this->accion2 = "";
	$this->resultado2 = 0;
	$this->pantalla2 = "0";
	$this->error = "";

	$this->selectU1 = "";
	$this->selectU2 = "";

	}
//CAMBIAMOS EL GET QUE ESTABA POR DEFAULT POR EL POST YA QUE GET MUESTRA LA INFORMACIÓN DE LAS ACCIONES EN LA URL

	public function cachaParametrosConversor(){
		if (isset($_POST["pantalla2"])) {
			$this->pantalla2 = $_POST["pantalla2"];
		}
		if (isset($_POST["resultado2"])) {
			$this->resultado2 = $_POST["resultado2"];
		}
		if (isset($_POST["entrada2"])) {
			$this->entrada2 = $_POST["entrada2"];
		}
		if (isset($_POST["accion2"])) {
			$this->accion2 = $_POST["accion2"];
		}
		if (isset($_POST["error"])) {
			$this->error = $_POST["error"];
		}


		if (isset($_POST["selectU1"])) {
			$this->selectU1 = $_POST["selectU1"];
		}
		if (isset($_POST["selectU2"])) {
			$this->selectU2 = $_POST["selectU2"];
		}
		


	}
	public function ejecutaOperacionConversor(){


		switch ($this->accion2) {
			case "convertirUnidades": $this->convertirUnidades();
			break;
			default: 
			break;
		}
		
	}

	private function convertirUnidades(){
		//Centrimetros o otro
		if ($this->selectU1=="c"&&$this->selectU2=="c2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2 . "cm";
		}
		elseif ($this->selectU1=="c"&&$this->selectU2=="m2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2/100 . "m";
		}

		elseif ($this->selectU1=="c"&&$this->selectU2=="p2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2/2.54 . "pulgada(s)";
		}
		
		elseif ($this->selectU1=="c"&&$this->selectU2=="y2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2/91.44 . "yarda(s)";
		}	

		//Metros o otro
		elseif ($this->selectU1=="m"&&$this->selectU2=="c2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2*100 . "cm";
		}
		elseif ($this->selectU1=="m"&&$this->selectU2=="m2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2 . "m";
		}
		elseif ($this->selectU1=="m"&&$this->selectU2=="p2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2*39.37 . "pulgada(s)";
		}
		elseif ($this->selectU1=="m"&&$this->selectU2=="y2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2*1.09361 . "yarda(s)";
		}

		//Pulgada a otro
		elseif ($this->selectU1=="p"&&$this->selectU2=="c2") {
			$this->pantalla2 = $this->entrada2 . "pulgada(s)";
			$this->resultado2 = $this->entrada2*2.54 . "cm";
		}
		elseif ($this->selectU1=="p"&&$this->selectU2=="m2") {
			$this->pantalla2 = $this->entrada2 . "pulgadas(s)";
			$this->resultado2 = $this->entrada2/39.37 . "m";
		}
		elseif ($this->selectU1=="p"&&$this->selectU2=="p2") {
			$this->pantalla2 = $this->entrada2 . "pulgada(s)";
			$this->resultado2 = $this->entrada2 . "pulgada(s)";
		}
		elseif ($this->selectU1=="p"&&$this->selectU2=="y2") {
			$this->pantalla2 = $this->entrada2 . "pulgada(s)";
			$this->resultado2 = $this->entrada2/36 . "yarda(s)";
		}

		//Yarda a otro
		elseif ($this->selectU1=="y"&&$this->selectU2=="c2") {
			$this->pantalla2 = $this->entrada2 . "yarda(s)";
			$this->resultado2 = $this->entrada2*91.4 . "cm";
		}
		elseif ($this->selectU1=="y"&&$this->selectU2=="m2") {
			$this->pantalla2 = $this->entrada2 . "yardas(s)";
			$this->resultado2 = $this->entrada2*1.094 . "m";
		}
		elseif ($this->selectU1=="y"&&$this->selectU2=="p2") {
			$this->pantalla2 = $this->entrada2 . "yarda(s)";
			$this->resultado2 = $this->entrada2*36 . "pulgada(s)";
		}
		elseif ($this->selectU1=="y"&&$this->selectU2=="y2") {
			$this->pantalla2 = $this->entrada2 . "yarda(s)";
			$this->resultado2 = $this->entrada2 . "yarda(s)";
		}
		
		//Gramos a otro
		elseif ($this->selectU1=="gr"&&$this->selectU2=="gr2") {
			$this->pantalla2 = $this->entrada2 . "gr";
			$this->resultado2 = $this->entrada2 . "gr";
		}
		elseif ($this->selectU1=="gr"&&$this->selectU2=="kg2") {
			$this->pantalla2 = $this->entrada2 . "gr";
			$this->resultado2 = $this->entrada2/1000 . "kg";
		}
		elseif ($this->selectU1=="gr"&&$this->selectU2=="oz2") {
			$this->pantalla2 = $this->entrada2 . "gr";
			$this->resultado2 = $this->entrada2/28.35 . "oz(s)";
		}
		//KLilogramos a otro
		elseif ($this->selectU1=="kg"&&$this->selectU2=="gr2") {
			$this->pantalla2 = $this->entrada2 . "kr";
			$this->resultado2 = $this->entrada2*1000 . "gr";
		}
		elseif ($this->selectU1=="kg"&&$this->selectU2=="kg2") {
			$this->pantalla2 = $this->entrada2 . "kg";
			$this->resultado2 = $this->entrada2 . "kg";
		}
		elseif ($this->selectU1=="kg"&&$this->selectU2=="oz2") {
			$this->pantalla2 = $this->entrada2 . "kg";
			$this->resultado2 = $this->entrada2*35.274 . "oz(s)";
		}
		//Onza a otro
		elseif ($this->selectU1=="oz"&&$this->selectU2=="gr2") {
			$this->pantalla2 = $this->entrada2 . "oz(s)";
			$this->resultado2 = $this->entrada2*28.35 . "gr";
		}
		elseif ($this->selectU1=="oz"&&$this->selectU2=="kg2") {
			$this->pantalla2 = $this->entrada2 . "oz(s)";
			$this->resultado2 = $this->entrada2/35.274 . "kg";
		}
		elseif ($this->selectU1=="oz"&&$this->selectU2=="oz2") {
			$this->pantalla2 = $this->entrada2 . "oz(s)";
			$this->resultado2 = $this->entrada2 . "oz(s)";
		}


		//Litros a otro
		elseif ($this->selectU1=="lt"&&$this->selectU2=="lt2") {
			$this->pantalla2 = $this->entrada2 . " lt";
			$this->resultado2 = $this->entrada2 . " lt";
		}
		elseif ($this->selectU1=="lt"&&$this->selectU2=="ml2") {
			$this->pantalla2 = $this->entrada2 . " lt";
			$this->resultado2 = $this->entrada2*1000 . " ml";
		}
		elseif ($this->selectU1=="lt"&&$this->selectU2=="mc2") {
			$this->pantalla2 = $this->entrada2 . " lt";
			$this->resultado2 = $this->entrada2/1000 . " m³";
		}

		//Mililítros a otro
		elseif ($this->selectU1=="ml"&&$this->selectU2=="lt2") {
			$this->pantalla2 = $this->entrada2 . " ml";
			$this->resultado2 = $this->entrada2/1000 . " lt";
		}
		elseif ($this->selectU1=="ml"&&$this->selectU2=="ml2") {
			$this->pantalla2 = $this->entrada2 . " ml";
			$this->resultado2 = $this->entrada2 . " ml";
		}
		elseif ($this->selectU1=="ml"&&$this->selectU2=="mc2") {
			$this->pantalla2 = $this->entrada2 . " ml";
			$this->resultado2 = $this->entrada2/1000000 . " m³";
		}

		//m³ a otro
		elseif ($this->selectU1=="mc"&&$this->selectU2=="lt2") {
			$this->pantalla2 = $this->entrada2 . "m³";
			$this->resultado2 = $this->entrada2*1000 . " lt";
		}
		elseif ($this->selectU1=="mc"&&$this->selectU2=="ml2") {
			$this->pantalla2 = $this->entrada2 . "m³";
			$this->resultado2 = $this->entrada2*1000000 . " ml";
		}
		elseif ($this->selectU1=="mc"&&$this->selectU2=="mc2") {
			$this->pantalla2 = $this->entrada2 . " m³";
			$this->resultado2 = $this->entrada2 . " m³";
		}
		else {
			echo "<br><strong><FONT COLOR='red'>***Opción no Válida***</FONT></strong><br><br>";
			$this->reset();
		}	
		
	}

	
	private function reset(){
	$this->entrada2 = 0;
	$this->accion2 = "";
	$this->resultado2 = 0;
	$this->pantalla2 = "0";
	}

}