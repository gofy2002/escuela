<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="/extras/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/extras/bootstrap/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="/extras/css/jquery.dataTables.min.css">

	<script type="text/javascript" src="/extras/js/jquery-3.1.1.js"></script>
	<script type="text/javascript" src="/extras/bootstrap/js/bootstrap.min.js"></script>

	<script type="text/javascript" src="/extras/bootstrap/js/validator.min.js"></script>

	<script type="text/javascript" src="/extras/js/jquery.dataTables.min.js"></script>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<?php echo form_open('alumnoscontroller/crear',array('class' => 'form-horizontal', 'data-toggle' => 'validator') ); ?>
				<fieldset>
					<div id="legend">
						<legend class="">Registro de Alumnos</legend>
					</div>
					<div class="form-group">
						<label for="nombre">Nombre:</label>
						<div class="controls">
							<?php 
								$nombre = array('name' => 'nombre',
												'id' => 'nombre',
												'class' => 'form-control input-lg',
												'value' =>'');
								echo form_input($nombre);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="apellidos">Apellidos:</label>
						<div class="controls">
							<?php 
								$apellidos = array('name' => 'apellidos',
												'id' => 'apellidos',
												'class' => 'form-control input-lg',
												'value' =>'');
								echo form_input($apellidos);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="domicilio">Domicilio:</label>
						<div class="controls">
							<?php 
								$domicilio = array('name' => 'domicilio',
												'id' => 'domicilio',
												'class' => 'form-control input-lg',
												'value' =>'');
								echo form_input($domicilio);

							 ?>
						</div>
					</div>


					<div class="form-group">
						<label for="ciudad">Ciudad:</label>
						<div class="controls">
							<?php 
								$ciudad = array('name' => 'ciudad',
												'id' => 'ciudad',
												'class' => 'form-control input-lg',
												'value' =>'');
								echo form_input($ciudad);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="estado">Estado:</label>
						<div class="controls">
							<?php 
								$estado = array('name' => 'estado',
												'id' => 'estado',
												'class' => 'form-control input-lg',
												'value' =>'');
								echo form_input($estado);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="pais">Pais:</label>
						<div class="controls">
							<?php 
								$pais = array('name' => 'pais',
												'id' => 'pais',
												'class' => 'form-control input-lg',
												'value' =>'');
								echo form_input($pais);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<label for="fecha_nacimiento">Fecha Nacimiento:</label>
						<div class="controls">
							<?php 
								$fecha_nacimiento = array('name' => 'fecha_nacimiento',
												'id' => 'fecha_nacimiento',
												'class' => 'form-control input-lg',
												'value' =>'');
								echo form_input($fecha_nacimiento);

							 ?>
						</div>
					</div>

					<div class="form-group">
						<div class="controls">
							<button class="btn btn-success">Registrar</button>
						</div>
					</div>

				</fieldset>
				<?php echo form_close(); ?>
			</div>		
		</div>
	</div>

</body>
</html>