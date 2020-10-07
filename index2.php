<a href="../index.php">Regresar al inicio</a><br><br>
<a href="index.php">Regresar al index1</a>
<br> 
<?php

include("Controllers/ConversorController2.php");


$conversor = new ConversorController();
$conversor->cachaParametrosConversor();
$conversor->ejecutaOperacionConversor();

//ok Obtener la entrada y la acción
//ok Ejecutar la operación
//ok Imprimir los resultados
?>

 <strong> Conversor de Unidades</strong><br><br>

<strong> Cantidad</strong><br>
<form method="post">


	
	<input type="number" step="any" name="entrada2" required><br>

	<select name="selectU1">
	<option value="c">Centímetro</option>
	<option value="m">Metro</option>
	<option value="p">Pulgada</option>
	<option value="y">Yarda</option>
	<option value="separador">----------</option>
	<option value="gr">Gramo</option>
	<option value="kg">Kilogramo</option>
	<option value="oz">Onza</option>
	<option value="separador">----------</option>
	<option value="lt">Litro</option>
	<option value="ml">Mililitro</option>
	<option value="mc">Metro Cúbico</option>

	</select> 
	<label> a </label>
	<select name="selectU2">
	<option value="c2">Centímetro</option>
	<option value="m2">Metro</option>
	<option value="p2">Pulgada</option>
	<option value="y2">Yarda</option>
	<option value="separador">----------</option>
	<option value="gr2">Gramo</option>
	<option value="kg2">Kilogramo</option>
	<option value="oz2">Onza</option>
	<option value="separador">----------</option>
	<option value="lt2">Litro</option>
	<option value="ml2">Mililitro</option>
	<option value="mc2">Metro Cúbico</option>
	
	
	</select> 
	<br>
	<button name="accion2" value="convertirUnidades">Convertir</button><br>

	<label><?php echo $conversor->pantalla2?></label>
	<input type="hidden" name="pantalla2"
		 value="<?php echo $conversor->pantalla2?>"> =
		 <label><?php echo $conversor->resultado2?></label>
	<input type="hidden" name="resultado2"
		value="<?php echo $conversor->resultado2?>"><br>


	
</form>

<form method="post">
	<button name="accion2" value="reset">Reset</button>
</form>
