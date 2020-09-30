<html>

<body>
	<h1>Formulario Prueba</h1>
	<form action="accion.php" method="POST">
		<label>Nombre</label>
		<input type="text" name="Nombre" />
		<br />
		<label>Apellido</label>
		<input type="text" name="Apellido" />
		<br />
		<label>Ubicacion</label>
		<select name="taskOption">
			<option value="Beni" selected>Beni</option>
			<option value="Chuquisaca">Chuquisaca</option>
			<option value="Cochabamba">Cochabamba</option>
			<option value="La Paz">La Paz</option>
			<option value="Oruro">Oruro</option>
			<option value="Pando">Pando</option>
			<option value="Potosí">Potosí</option>
			<option value="Santa Cruz">Santa Cruz</option>
			<option value="Tarija">Tarija</option>
		</select>
		<br />
		<label>Checkbox</label>
		<input type="checkbox" name="check1">
		<br />
		<input type="submit" name="Aceptar" value="Enviar" />
	</form>
</body>

</html>