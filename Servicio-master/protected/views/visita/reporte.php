<div class="container">
	<div class="span12">
		<h1 class="text-center">REPORTE DE VISITAS POR DIA</h1>
		<table class="table-striped">
			<tr>
				<th style="background-color: #555; color: white">fecha</th>
				<th style="background-color: #555; color: white">Hora Llegada</th>
				<th style="background-color: #555; color: white">Hora Salida</th>
				<th style="background-color: #555; color: white">Usuario</th>
				<th style="background-color: #555; color: white">Visitante</th>
				<th style="background-color: #555; color: white">Adolescente</th>
			</tr>
			<?php foreach ($model as $data): ?>
				<tr>
					<td><?php echo $data->fecha ?></td>
					<td><?php echo $data->h_entrada ?></td>
					<td><?php echo $data->h_salida?></td>
					<td><?php echo $data->fkUsuario ?></td>
					<td><?php echo $data->fkVisitante ?></td>
					<td><?php echo $data->fkAdolescente ?></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>