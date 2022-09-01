<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Todos los Productos</title>
</head>
<body>
	<?php foreach ($productos as $producto): ?>
		<p>
		{{--	<a href="{{ route('producto.show', $producto->Id) }}"> --}}
				Codigo: <?=$producto['Codigo']?> </a> 

			Producto: <?=$producto['Descripcion']?>
			Precio: <?=$producto['PrecioUnitario']?>
		{{--	<br> Ingresado: {{ $producto->created_at->format('d/m/y') }}
			 <br> Ingresado: {{ $producto->created_at->diffForHumans() }} --}}
			<br>
		</p>
	<?php endforeach ?>
</body>
</html>