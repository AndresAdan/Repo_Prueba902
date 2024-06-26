<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Parcial 1: CRUD Laravel</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body style="background: #f5f5f5;">

	<div class="container mt-2">
	    <div class="row">
		    <div class="col-lg-12 margin-tb">
		        <center><h1> Lista de Maestros Laravel 9</h1></center>
		   </div>
	   	</div>
   </div>

    <div class="pull-right mb-2">
    	<a class="btn btn-success" href="{{ route('teachers.create') }}"> Agregar Maestros</a>
    </div>
	
	<div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>id</th>
					<th>Nombre</th>
					<th>Apellidos</th>
					<th>Dirección</th>
					<th>Telefono</th>
					<th>Especialidad</th>
					<th>NivelEstudios</th>
					<th width="280px">Action</th>	
				</tr>
			</thead>
			<tbody>
				@foreach($teachers as $teachers)
				<tr>
					<td>{{$teachers->id}}</td>
					<td>{{$teachers->Nombre}}</td>
					<td>{{$teachers->Apellidos}}</td>
					<td>{{$teachers->Direccion}}</td>
					<td>{{$teachers->Telefono}}</td>
					<td>{{$teachers->Especialidad}}</td>
					<td>{{$teachers->NivelEstudios}}</td>
					<td>
				        <form action="{{ route('teachers.destroy',$teachers->id) }}" method="Post">
				        	<a class="btn btn-primary" href="{{ route('teachers.edit',$teachers->id) }}">Edit</a>
				        	<a class="btn btn-info btn-sm" href="{{ route('teachers.show',$teachers->id) }}">View</a>
				                 @csrf
				                @method('DELETE')
				        	<button type="submit" class="btn btn-danger">Delete</button>
				        </form>
			        </td>
				</tr>
				@endforeach
			</tbody>
		</table>	
	</div>

	<div class="pull-right mb-2">
    	<a class="btn btn-success" href="{{ url('/') }}"> Regresar Menú</a>
    </div>

</body>
</html>	