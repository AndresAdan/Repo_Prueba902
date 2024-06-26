<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Editar Maestro</title>
</head>
<body>

	<div class="container mt-2">
		<div class="row">
			<h2>Editar Maestro</h2>				
		</div>		
	</div>

	<div class="pull-rigt">
		<a class="btn btn-primary" href="{{route('teachers.index')}}" enctype="multipart/form-data"> Regresar al Index</a>
	</div>

	<form action="{{route('teachers.update', $teachers->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PUT")		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Nombre del Maestro</strong>
					<input type="text" name="Nombre" value="{{$teachers->Nombre}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Apellido del Maestro</strong>
					<input type="text" name="Apellidos" value="{{$teachers->Apellidos}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Dirección del Maestro</strong>
					<input type="text" name="Direccion" value="{{$teachers->Direccion}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Telefono del Maestro</strong>
					<input type="phone" name="Telefono" value="{{$teachers->Telefono}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Especialidad</strong>
					<input type="text" name="Especialidad" value="{{$teachers->Especialidad}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>NivelEstudios</strong>
					<input type="text" name="NivelEstudios" value="{{$teachers->NivelEstudios}}" class="form-control">
				</div>			
			</div>
			<button type="submit" class="btn btn-primary ml-3">Actualizar Datos</button>
		</div>
	</form>

</body>
</html>	