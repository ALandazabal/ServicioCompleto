<!--<picture>
	<source srcset="encabezado-reporte.png" media="(min-width:600px)">
</picture>-->
<img src="../encabezado-reporte.png" style="min-width:600px"/>
<h1>REPORTE TOTAL DE ADOLESCENTES</h1>
<table>
	<tr>
		<th style="background-color: #555; color: white">Cedula</th>
		<th style="background-color: #555; color: white">Nombre</th>
		<th style="background-color: #555; color: white">Apellido</th>
		<th style="background-color: #555; color: white">Nacionalidad</th>
	</tr>
	<?php foreach($model as $data): ?>
		<tr>
			<td><?php echo $data->idAdolescente ?></td>
			<td><?php echo $data->nombre ?></td>
			<td><?php echo $data->apellido ?></td>
			<td><?php echo $data->fkNac ?></td>
		</tr>
	<?php endforeach; ?>
</table>