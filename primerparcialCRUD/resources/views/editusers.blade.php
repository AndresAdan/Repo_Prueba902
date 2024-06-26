<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<title>Editar Usuarios</title>
</head>
<body>

	<div class="container mt-2">
		<div class="row">
			<h2>Editar Usuarios</h2>				
		</div>		
	</div>

	<div class="pull-rigt">
		<a class="btn btn-primary" href="{{route('users.index')}}" enctype="multipart/form-data"> Regresar al Index</a>
	</div>

	<form action="{{route('users.update', $users->id)}}" method="POST" enctype="multipart/form-data">
		@csrf
		@method("PUT")		
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
			<div class="form-group">
                <label for="name">name:</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="email">email:</label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="password">password:</label>
                <input type="text" class="form-control" id="password" name="password" required>
            </div>		
			</div>
			<button type="submit" class="btn btn-primary ml-3">Actualizar Datos</button>
		</div>
	</form>

</body>
</html>	