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
		        <center><h1> Lista de Usuarios Laravel 9</h1></center>
		   </div>
	   	</div>
   </div>

    <div class="pull-right mb-2">
    	<a class="btn btn-success" href="{{ route('users.create') }}"> Agregar Usuarios</a>
    </div>
	
	<div>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>name</th>
					<th>email</th>
					<th>password</th>
					<th width="280px">Action</th>	
				</tr>
			</thead>
			<tbody>
				@foreach($users as $users)
				<tr>
					<td>{{$users->name}}</td>
					<td>{{$users->email}}</td>
					<td>{{$users->password}}</td>
					<td>
				        <form action="{{ route('users.destroy',$users->id) }}" method="Post">
				        	<a class="btn btn-primary" href="{{ route('users.edit',$users->id) }}">Edit</a>
				        	<a class="btn btn-info btn-sm" href="{{ route('users.show',$users->id) }}">View</a>
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