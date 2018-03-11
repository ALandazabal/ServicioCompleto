<table>
	<tr>
		<th>Fecha</th>
		<th>Hora Entrada</th>
		<th>Hora Salida</th>
		<th>Usuario</th>
		<th>Visitante</th>
		<th>Adolescente</th>
		<th>Parentesco</th>
	</tr>
	<?php foreach($model as $data): ?>
	<tr>
		<td><?php echo $data->fecha?></td>
		<td><?php echo $data->h_entrada?></td>
		<td><?php echo $data->h_salida?></td>
		<td><?php echo $data->fkUsuario?></td>
		<td><?php echo $data->fkRelVte?></td>
		<td><?php echo $data->fkRelAdol?></td>
		<td><?php 
			$var = $data->getMenuRelacion($data->fkRelVte,$data->fkRelAdol);

			echo $var?></td>
	</tr>
	<?php endforeach; ?>
</table>