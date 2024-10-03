<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Lista de Usuarios</title>
	<style>
		table {
			width: 100%;
			border-collapse: collapse;
		}
		th, td {
			border: 1px solid #000;
			padding: 8px;
			text-align: left;
		}
		th {
			background-color: #f2f2f2;
		}
	</style>
</head>
<body>
	<h1>Lista de Usuarios</h1>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($users as $user) { ?>
				<tr>
					<td><?php echo $user->id; ?></td>
					<td><?php echo $user->name; ?></td>
					<td><?php echo $user->last_name; ?></td>
					<td><?php echo $user->email; ?></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>