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
		<div class="card-header">Detalles de Usuarios</div>
		<div class="card-body">
			<h5 class="card-title">Name: {{$users-> name}}</h5>
			<p class="card-text"> Email: {{$users->email}}</p>
			<p class="card-text"> Password: {{$users->password}}</p>
		</div>
		<table border=0>
			<tr>
				<td>
					<a class="btn btn-primary" href="{{ route ('users.edit', $users->id)}}">Editar</a>
					<form action="{{ route('users.destroy',$users->id) }}" method="Post">
				                 @csrf
				                @method('DELETE')
				    	<button type="submit" class="btn btn-danger">Delete</button>
				    </form>
					<a class="btn btn-primary" href="{{ route ('users.index')}}" enctype="multipart/form-data">Regresar</a>	
				</td>
			</tr>
		</table>
	</div>

</body>
</html>