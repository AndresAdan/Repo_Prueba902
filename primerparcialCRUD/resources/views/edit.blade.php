<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Editar Estudiante</title>
</head>
<body>

	<div class="container mt-2">
		<div class="row">
			<h2>Editar Estudiante</h2>				
		</div>		
	</div>

	<div class="pull-rigt">
		<a class="btn btn-primary" href="{{route('students.index')}}" enctype="multipart/form-data"> Regresar al Index</a>
	</div>

	<form action="{{route('students.update', $students->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PUT")		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Nombre del Estudiante</strong>
					<input type="text" name="Nombre" value="{{$students->Nombre}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Apellido del Estudiante</strong>
					<input type="text" name="Apellidos" value="{{$students->Apellidos}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Dirección del Estudiante</strong>
					<input type="text" name="Direccion" value="{{$students->Direccion}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Telefono del Estudiante</strong>
					<input type="phone" name="Telefono" value="{{$students->Telefono}}" class="form-control">
				</div>

				<div class="form-group">
					<strong>Correo del Estudiante</strong>
					<input type="text" name="Email" value="{{$students->Email}}" class="form-control">
				</div>			
			</div>
			<button type="submit" class="btn btn-primary ml-3">Actualizar Datos</button>
		</div>
	</form>

</body>
</html>	