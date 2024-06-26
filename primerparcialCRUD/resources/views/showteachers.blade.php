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
		<div class="card-header">Detalles de Maestros</div>
		<div class="card-body">
			<h5 class="card-title">Nombre: {{$teachers-> Nombre}}</h5>
			<p class="card-text"> Apellidos: {{$teachers->Apellidos}}</p>
			<p class="card-text"> Direccion: {{$teachers->Direccion}}</p>
			<p class="card-text"> Telefono: {{$teachers->Telefono}}</p>
			<p class="card-text"> Especialidad: {{$teachers->Especialidad}}</p>
			<p class="card-text"> NivelEstudios: {{$teachers->NivelEstudios}}</p>
		</div>
		<table border=0>
			<tr>
				<td>
					<a class="btn btn-primary" href="{{ route ('teachers.edit', $teachers->id)}}">Editar</a>
					<form action="{{ route('teachers.destroy',$teachers->id) }}" method="Post">
				                 @csrf
				                @method('DELETE')
				    	<button type="submit" class="btn btn-danger">Delete</button>
				    </form>
					<a class="btn btn-primary" href="{{ route ('teachers.index')}}" enctype="multipart/form-data">Regresar</a>	
				</td>
			</tr>
		</table>
	</div>

</body>
</html>