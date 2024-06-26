<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Detalles</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>

	<div class="card">
		<div class="card-header">Detalles del estudiante</div>
		<div class="card-body">
			<h5 class="card-title">Nombre: {{$students-> Nombre}}</h5>
			<p class="card-text"> Apellidos: {{$students->Apellidos}}</p>
			<p class="card-text"> Direccion: {{$students->Direccion}}</p>
			<p class="card-text"> Telefono: {{$students->Telefono}}</p>
			<p class="card-text"> Correo: {{$students->Email}}</p>
		</div>
		<table border=0>
			<tr>
				<td>
					<a class="btn btn-primary" href="{{ route ('students.edit', $students->id)}}">Editar</a>
					<form action="{{ route('students.destroy',$students->id) }}" method="Post">
				                 @csrf
				                @method('DELETE')
				    	<button type="submit" class="btn btn-danger">Delete</button>
				    </form>
					<a class="btn btn-primary" href="{{ route ('students.index')}}" enctype="multipart/form-data">Regresar</a>	
				</td>
			</tr>
		</table>
	</div>

</body>
</html>