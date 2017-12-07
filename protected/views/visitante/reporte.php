<h1>REPORTE TOTAL DE VISITANTES</h1>
<table>
	<tr>
		<th style="background-color: #555; color: white">Cedula</th>
		<th style="background-color: #555; color: white">Nombre</th>
		<th style="background-color: #555; color: white">Apellido</th>
		<th style="background-color: #555; color: white">Dirección</th>
		<th style="background-color: #555; color: white">Teléfono</th>
		<th style="background-color: #555; color: white">Estado</th>
		<th style="background-color: #555; color: white">Municipio</th>
		<th style="background-color: #555; color: white">Parentesco</th>
		<th style="background-color: #555; color: white">Nacionalidad</th>
	</tr>
	<?php foreach($model as $data): ?>
		<tr>
			<td><?php echo $data->idVisitante ?></td>
			<td><?php echo $data->nombre ?></td>
			<td><?php echo $data->apellido ?></td>
			<td><?php echo $data->direccion ?></td>
			<td><?php echo $data->telefono ?></td>
			<td><?php echo $data->fkEstado ?></td>
			<td><?php echo $data->fkMunicipio ?></td>
			<td><?php echo $data->fkRol ?></td>
			<td><?php echo $data->fkNac ?></td>
		</tr>
	<?php endforeach; ?>
</table>