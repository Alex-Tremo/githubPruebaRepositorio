<a href="../index.php">Regresar al inicio</a><br><br>
<a href="index2.php">Hey buenas a todos</a>
<br> 
<?php
include("Controllers/CalculadoraController.php");
include("Controllers/ConversorController.php");

$calculadora = new CalculadoraController();
$calculadora->cachaParametros();
$calculadora->ejecutaOperacion();

$conversor = new ConversorController();
$conversor->cachaParametrosConversor();
$conversor->ejecutaOperacionConversor();

//ok Obtener la entrada y la acción
//ok Ejecutar la operación
//ok Imprimir los resultados
?>
<br> <strong> Calculadora</strong>
<form method="post">
	<label><?php echo $calculadora->pantalla?></label>
	<input type="hidden" name="pantalla"
		 value="<?php echo $calculadora->pantalla?>"> =
		 <label><?php echo $calculadora->resultado?></label>
	<input type="hidden" name="resultado"
		value="<?php echo $calculadora->resultado?>"><br><br>
	<input type="number" name="entrada" required>
	<button name="accion" value="suma">+</button>
	<button name="accion" value="resta">-</button>
	<button name="accion" value="multiplica">*</button>
	<button name="accion" value="divide">/</button>
</form>

<form method="post">
	<button name="accion" value="reset">Reset</button>
</form>

<hr>
 <strong> Conversor de Unidades Versión 1</strong><br><br>

<strong> Distancia</strong><br>
<form method="post">


	
	<input type="number" step="any" name="entrada2" required><br>

	<select name="selectD1">
	<option value="c">Centímetro</option>
	<option value="m">Metro</option>
	<option value="p">Pulgada</option>
	<option value="y">Yarda</option> 
	</select> 
	<label> a </label>
	<select name="selectD2">
	<option value="c2">Centímetro</option>
	<option value="m2">Metro</option>
	<option value="p2">Pulgada</option>
	<option value="y2">Yarda</option>
	</select> 
	<br>
	<button name="accion2" value="convertirDis">Convertir</button><br>

	<label><?php echo $conversor->pantalla2?></label>
	<input type="hidden" name="pantalla2"
		 value="<?php echo $conversor->pantalla2?>"> =
		 <label><?php echo $conversor->resultado2?></label>
	<input type="hidden" name="resultado2"
		value="<?php echo $conversor->resultado2?>"><br>

	
</form>


<strong> Peso</strong><br>
<form method="post">
	
	<input type="number" step="any" name="entrada3" required><br>

	<select name="selectP1">
	<option value="gr">Gramo</option>
	<option value="kg">Kilogramo</option>
	<option value="oz">Onza</option>
	 
	</select> 
	<label> a </label>
	<select name="selectP2">
	<option value="gr2">Gramo</option>
	<option value="kg2">Kilogramo</option>
	<option value="oz2">Onza</option>
	
	</select> 
	<br>
	<button name="accion3" value="convertirPeso">Convertir</button><br>

	<label><?php echo $conversor->pantalla3?></label>
	<input type="hidden" name="pantalla3"
		 value="<?php echo $conversor->pantalla3?>"> =
		 <label><?php echo $conversor->resultado3?></label>
	<input type="hidden" name="resultado3"
		value="<?php echo $conversor->resultado3?>"><br>

	
</form>
<strong> Cantidad</strong><br>

<form method="post">
	
	<input type="number" step="any" name="entrada4" required><br>

	<select name="selectV1">
	<option value="lt">Litro</option>
	<option value="ml">Mililitro</option>
	<option value="mc">Metro Cúbico</option>
	
	</select> 
	<label> a </label>
	<select name="selectV2">
	<option value="lt2">Litro</option>
	<option value="ml2">Mililitro</option>
	<option value="mc2">Metro Cúbico</option>
	
	</select> 
	<br>
	<button name="accion4" value="convertirDis">Convertir</button><br>

	<label><?php echo $conversor->pantalla4?></label>
	<input type="hidden" name="pantalla4"
		 value="<?php echo $conversor->pantalla4?>"> =
		 <label><?php echo $conversor->resultado4?></label>
	<input type="hidden" name="resultado4"
		value="<?php echo $conversor->resultado4?>"><br><br>

	
</form>

<form method="post">
	<button name="accion2" value="reset">Reset</button>
</form>
