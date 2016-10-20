<!DOCTYPE html>
<html>
<head>
	<title>Empleados</title>
</head>
<body>

	<h1>Agregar Empleados</h1>
	<form action="<? echo base_url();?>cEmpleado/guardar" method="POST">
		<table>
			<tr>
				<td><label>Nombre: </label><input type="text" name="nombre"></td>
			</tr>
			<tr>
				<td><label>Apellido Paterno: </label><input type="text" name="ap_paterno"></td>
			</tr>
			<tr>
				<td><label>Fecha Nacimiento: </label><input type="date" name="f_nacimiento"></td>
			</tr>
			<tr>
				<td><input type="submit" value="Agregar"></td>
			</tr>
		</table>
	</form>
</body>
</html>