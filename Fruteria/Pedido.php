
<h4>REALICE SU COMPRA <?=$_SESSION['nombre']?></h4>

<form name='mensaje' method="POST" >

<br>
<strong>Selecciona la fruta:</strong> <select name="fruta" >
				<option value="Platano">Platano</option>
				<option value="Manzana">Mananaza</option>
				<option value="Pera">Pera</option>
			</select>

<strong>Cantidad:</strong> <input type="number" name="cantidad" value="0" size="3">

<br><br>
<input type="submit" name="orden" value="Anotar" >
<input type="submit" name="orden" value="Terminar">
</form>
