<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Mostrar un Producto</title>
</head>
<body>
	 <h1> <?=$producto['Descripcion']?> </h1> 
	 <p> Codigo: <?=$producto['Codigo']?> </p>>  
	 <p> Precio: <?=$producto['PrecioUnitario']?> </p>  

<!--	<h1> {{ $producto->Descripcion }} </h1>
	<p> Codigo:{{ $producto->Codigo }} </p>
	<p> Precio:{{ $producto->PrecioUnitario }} </p>-->

</body>
</html>