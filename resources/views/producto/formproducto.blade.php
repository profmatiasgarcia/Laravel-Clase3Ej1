<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Crear un Producto</title>
</head>
<body>
	<h1>Crear un Producto</h1>
	@if(count($errors) > 0)
		<div class="errors">
			<ul>
			@foreach($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
			</ul>
		</div>
	@endif
	<form action="{{ route('crearproducto') }}" method="post">
		{{ csrf_field() }}
		Codigo: <input type="text" name="Codigo" value="{{old('Codigo')}}">
		<br>
		Producto: <input type="text" name="Descripcion" value="{{old('Descripcion')}}">
		<br>
		Precio: <input type="text" name="PrecioUnitario" value="{{old('PrecioUnitario')}}">
		<br>
		<input type="submit" value="Crear">
	</form>
</body>
</html>