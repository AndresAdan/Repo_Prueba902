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
		        <center><h1> Lista de Estudiantes Laravel 9 </h1></center>
		   </div>
	   </div>
   </div>

   	<div class="pull-right mb-2">
    	<a style="border-radius: 50px; margin: 10px;" class="btn btn-success" href="{{ route('students.create') }}"> Agregar Estudiantes</a>
    </div>
	
	<div>
		<table class="table table-bordered" style="border: 2px solid #c9d9c9; background: #aba897;">
			<thead>
				<tr style="border: 2px solid #c9d9c9;">
					<th style="border: 2px solid #c9d9c9;">id</th>
					<th style="border: 2px solid #c9d9c9;">Nombre</th>
					<th style="border: 2px solid #c9d9c9;">Apellidos</th>
					<th style="border: 2px solid #c9d9c9;">Dirección</th>
					<th style="border: 2px solid #c9d9c9;">Telefono</th>
					<th style="border: 2px solid #c9d9c9;">Email</th>
					<th width="280px">Action</th>	
				</tr>
			</thead>
			<tbody>
				@foreach($students as $students)
				<tr style="border: 2px solid #c9d9c9;">
					<td style="border: 2px solid #c9d9c9;">{{$students->id}}</td>
					<td style="border: 2px solid #c9d9c9;">{{$students->Nombre}}</td>
					<td style="border: 2px solid #c9d9c9;">{{$students->Apellidos}}</td>
					<td style="border: 2px solid #c9d9c9;">{{$students->Direccion}}</td>
					<td style="border: 2px solid #c9d9c9;">{{$students->Telefono}}</td>
					<td style="border: 2px solid #c9d9c9;">{{$students->Email}}</td>
					<td style="border: 2px solid #c9d9c9;">
				        <form action="{{ route('students.destroy',$students->id) }}" method="Post">
				        	<a style="border-radius: 50px" class="btn btn-primary" href="{{ route('students.edit',$students->id) }}">Edit</a>
				        	<a style="border-radius: 50px" class="btn btn-info btn-sm" href="{{ route('students.show',$students->id) }}">View</a>
				                 @csrf
				                @method('DELETE')
				        	<button style="border-radius: 50px" type="submit" class="btn btn-danger">Delete</button>
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