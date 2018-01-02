<h2>Listado de Visitantes</h2>
<table border="1">
	<tr>
		<th>Nombre</th>
		<th>Título</th>
		<th>Acción</th>
	</tr>
	<?<?php foreach($adols as $adols){ ?>
		<tr>
			<td><?php echo $adols->idAdolescente; ?></td>
			<td><?php echo $adols->nombre; ?></td>
			<td><?php echo $adols->apellido; ?></td>
		</tr>
	<?php } ?>
</table>