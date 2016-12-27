<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/extras/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/extras/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/extras/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="/extras/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="/extras/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="/extras/bootstrap/js/validator.min.js"></script>

	<script type="text/javascript" src="/extras/js/jquery.dataTables.min.js"></script>

	<script>
		$(document).ready(function(){
			$('#alumnos').DataTable({

			});
		});
	</script>

</head>
<body>
<div class="container">
	<div class="row">
		<h1><?php echo $titulo ?></h1>
	</div>
	<br>
	<a class="btn btn-success" href="<?php echo base_url("alumnoscontroller/crear") ?>">Crear Alumno</a>
	<br><br>
	<table id="alumnos" class="display" width="100%" cellpadding="0">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Email</th>
				<th>Pais</th>
				<th>Edad</th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Email</th>
				<th>Pais</th>
				<th>Edad</th>
			</tr>
		</tfoot>
		<tbody>
			<?php foreach ($busquedaAlumno->result() as $renglon ): ?>
				<tr>
					<td><?php echo $renglon->id; ?></td>
					<td><?php echo $renglon->nombre; ?></td>
					<td><?php echo $renglon->apellidos; ?></td>
					<td><?php echo $renglon->email; ?></td>
					<td><?php echo $renglon->pais; ?></td>
					<td><?php echo $renglon->fecha_nacimiento; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>

	</table>
</div>


</body>
</html>