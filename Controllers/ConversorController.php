<?php
Class ConversorController{
	public $entrada2;
	public $accion2;
	public $resultado2;
	public $pantalla2;

	public $entrada3;
	public $accion3;
	public $resultado3;
	public $pantalla3;

	public $entrada4;
	public $accion4;
	public $resultado4;
	public $pantalla4;

	public $selectD1;
	public $selectD2;
	public $selectP1;
	public $selectP2;
	public $selectV1;
	public $selectV2;


	function __construct(){
	$this->entrada2 = 0;
	$this->accion2 = "";
	$this->resultado2 = 0;
	$this->pantalla2 = "0";

	$this->entrada3 = 0;
	$this->accion3 = "";
	$this->resultado3 = 0;
	$this->pantalla3 = "0";

	$this->entrada4 = 0;
	$this->accion4 = "";
	$this->resultado4 = 0;
	$this->pantalla4 = "0";

	$this->selectD1 = "";
	$this->selectD2 = "";
	
	$this->selectP1 = "";
	$this->selectP2 = "";

	$this->selectV1 = "";
	$this->selectV2 = "";

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

		if (isset($_POST["pantalla3"])) {
			$this->pantalla3 = $_POST["pantalla3"];
		}
		if (isset($_POST["resultado3"])) {
			$this->resultado3 = $_POST["resultado3"];
		}
		if (isset($_POST["entrada3"])) {
			$this->entrada3 = $_POST["entrada3"];
		}
		if (isset($_POST["accion3"])) {
			$this->accion3 = $_POST["accion3"];
		}

		if (isset($_POST["pantalla4"])) {
			$this->pantalla4 = $_POST["pantalla4"];
		}
		if (isset($_POST["resultado4"])) {
			$this->resultado4 = $_POST["resultado4"];
		}
		if (isset($_POST["entrada4"])) {
			$this->entrada4 = $_POST["entrada4"];
		}
		if (isset($_POST["accion4"])) {
			$this->accion4 = $_POST["accion4"];
		}

		if (isset($_POST["selectD1"])) {
			$this->selectD1 = $_POST["selectD1"];
		}
		if (isset($_POST["selectD2"])) {
			$this->selectD2 = $_POST["selectD2"];
		}
		if (isset($_POST["selectP1"])) {
			$this->selectP1 = $_POST["selectP1"];
		}
		if (isset($_POST["selectP2"])) {
			$this->selectP2 = $_POST["selectP2"];
		}
		if (isset($_POST["selectV1"])) {
			$this->selectV1 = $_POST["selectV1"];
		}
		if (isset($_POST["selectV2"])) {
			$this->selectV2 = $_POST["selectV2"];
		}
		


	}
	public function ejecutaOperacionConversor(){

		if ($this->accion2) {
			$this->convertirDistancia();
		}
		if ($this->accion3) {
			$this->convertirPeso();
		}
		if ($this->accion4) {
			$this->convertirVolumen();
		}

		/*
		switch ($this->accion2) {
			case "convertirDis": $this->convertirDistancia();
			break;
			case "convertirPeso": $this->convertirPeso();
			break;
			case "convertirVolumen": $this->convertirVolumen();
			break;
			default: 
			break;
		}
		*/
	}

	private function convertirDistancia(){
		//Centrimetros o otro
		if ($this->selectD1=="c"&&$this->selectD2=="c2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2 . "cm";
		}

		if ($this->selectD1=="c"&&$this->selectD2=="m2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2/100 . "m";
		}
		if ($this->selectD1=="c"&&$this->selectD2=="p2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2/2.54 . "pulgada(s)";
		}
		if ($this->selectD1=="c"&&$this->selectD2=="y2") {
			$this->pantalla2 = $this->entrada2 . "cm";
			$this->resultado2 = $this->entrada2/91.44 . "yarda(s)";
		}
		
		//Metros o otro
		if ($this->selectD1=="m"&&$this->selectD2=="c2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2*100 . "cm";
		}
		if ($this->selectD1=="m"&&$this->selectD2=="m2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2 . "m";
		}
		if ($this->selectD1=="m"&&$this->selectD2=="p2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2*39.37 . "pulgada(s)";
		}
		if ($this->selectD1=="m"&&$this->selectD2=="y2") {
			$this->pantalla2 = $this->entrada2 . "m";
			$this->resultado2 = $this->entrada2*1.09361 . "yarda(s)";
		}

		//Pulgada a otro
		if ($this->selectD1=="p"&&$this->selectD2=="c2") {
			$this->pantalla2 = $this->entrada2 . "pulgada(s)";
			$this->resultado2 = $this->entrada2*2.54 . "cm";
		}
		if ($this->selectD1=="p"&&$this->selectD2=="m2") {
			$this->pantalla2 = $this->entrada2 . "pulgadas(s)";
			$this->resultado2 = $this->entrada2/39.37 . "m";
		}
		if ($this->selectD1=="p"&&$this->selectD2=="p2") {
			$this->pantalla2 = $this->entrada2 . "pulgada(s)";
			$this->resultado2 = $this->entrada2 . "pulgada(s)";
		}
		if ($this->selectD1=="p"&&$this->selectD2=="y2") {
			$this->pantalla2 = $this->entrada2 . "pulgada(s)";
			$this->resultado2 = $this->entrada2/36 . "yarda(s)";
		}

		//Yarda a otro
		if ($this->selectD1=="y"&&$this->selectD2=="c2") {
			$this->pantalla2 = $this->entrada2 . "yarda(s)";
			$this->resultado2 = $this->entrada2*91.4 . "cm";
		}
		if ($this->selectD1=="y"&&$this->selectD2=="m2") {
			$this->pantalla2 = $this->entrada2 . "yardas(s)";
			$this->resultado2 = $this->entrada2*1.094 . "m";
		}
		if ($this->selectD1=="y"&&$this->selectD2=="p2") {
			$this->pantalla2 = $this->entrada2 . "yarda(s)";
			$this->resultado2 = $this->entrada2*36 . "pulgada(s)";
		}
		if ($this->selectD1=="y"&&$this->selectD2=="y2") {
			$this->pantalla2 = $this->entrada2 . "yarda(s)";
			$this->resultado2 = $this->entrada2 . "yarda(s)";
		}

	}

	private function convertirPeso(){
		//Gramos a otro
		if ($this->selectP1=="gr"&&$this->selectP2=="gr2") {
			$this->pantalla3 = $this->entrada3 . "gr";
			$this->resultado3 = $this->entrada3 . "gr";
		}
		if ($this->selectP1=="gr"&&$this->selectP2=="kg2") {
			$this->pantalla3 = $this->entrada3 . "gr";
			$this->resultado3 = $this->entrada3/1000 . "kg";
		}
		if ($this->selectP1=="gr"&&$this->selectP2=="oz2") {
			$this->pantalla3 = $this->entrada3 . "gr";
			$this->resultado3 = $this->entrada3/28.35 . "oz(s)";
		}
		//KLilogramos a otro
		if ($this->selectP1=="kg"&&$this->selectP2=="gr2") {
			$this->pantalla3 = $this->entrada3 . "kr";
			$this->resultado3 = $this->entrada3*1000 . "gr";
		}
		if ($this->selectP1=="kg"&&$this->selectP2=="kg2") {
			$this->pantalla3 = $this->entrada3 . "kg";
			$this->resultado3 = $this->entrada3 . "kg";
		}
		if ($this->selectP1=="kg"&&$this->selectP2=="oz2") {
			$this->pantalla3 = $this->entrada3 . "kg";
			$this->resultado3 = $this->entrada3*35.274 . "oz(s)";
		}
		//Onza a otro
		if ($this->selectP1=="oz"&&$this->selectP2=="gr2") {
			$this->pantalla3 = $this->entrada3 . "oz(s)";
			$this->resultado3 = $this->entrada3*28.35 . "gr";
		}
		if ($this->selectP1=="oz"&&$this->selectP2=="kg2") {
			$this->pantalla3 = $this->entrada3 . "oz(s)";
			$this->resultado3 = $this->entrada3/35.274 . "kg";
		}
		if ($this->selectP1=="oz"&&$this->selectP2=="oz2") {
			$this->pantalla3 = $this->entrada3 . "oz(s)";
			$this->resultado3 = $this->entrada3 . "oz(s)";
		}

	}

	private function convertirVolumen(){
		//Litros a otro
		if ($this->selectV1=="lt"&&$this->selectV2=="lt2") {
			$this->pantalla4 = $this->entrada4 . " lt";
			$this->resultado4 = $this->entrada4 . " lt";
		}
		if ($this->selectV1=="lt"&&$this->selectV2=="ml2") {
			$this->pantalla4 = $this->entrada4 . " lt";
			$this->resultado4 = $this->entrada4*1000 . " ml";
		}
		if ($this->selectV1=="lt"&&$this->selectV2=="mc2") {
			$this->pantalla4 = $this->entrada4 . " lt";
			$this->resultado4 = $this->entrada4/1000 . " m³";
		}

		//Mililítros a otro
		if ($this->selectV1=="ml"&&$this->selectV2=="lt2") {
			$this->pantalla4 = $this->entrada4 . " ml";
			$this->resultado4 = $this->entrada4/1000 . " lt";
		}
		if ($this->selectV1=="ml"&&$this->selectV2=="ml2") {
			$this->pantalla4 = $this->entrada4 . " ml";
			$this->resultado4 = $this->entrada4 . " ml";
		}
		if ($this->selectV1=="ml"&&$this->selectV2=="mc2") {
			$this->pantalla4 = $this->entrada4 . " ml";
			$this->resultado4 = $this->entrada4/1000000 . " m³";
		}

		//m³ a otro
		if ($this->selectV1=="mc"&&$this->selectV2=="lt2") {
			$this->pantalla4 = $this->entrada4 . "m³";
			$this->resultado4 = $this->entrada4*1000 . " lt";
		}
		if ($this->selectV1=="mc"&&$this->selectV2=="ml2") {
			$this->pantalla4 = $this->entrada4 . "m³";
			$this->resultado4 = $this->entrada4*1000000 . " ml";
		}
		if ($this->selectV1=="mc"&&$this->selectV2=="mc2") {
			$this->pantalla4 = $this->entrada4 . " m³";
			$this->resultado4 = $this->entrada4 . " m³";
		}
		

	}
	
	private function reset(){
	$this->entrada2 = 0;
	$this->accion2 = "";
	$this->resultado2 = 0;
	$this->pantalla2 = "0";

	$this->entrada3 = 0;
	$this->accion3 = "";
	$this->resultado3 = 0;
	$this->pantalla3 = "0";
	}

}