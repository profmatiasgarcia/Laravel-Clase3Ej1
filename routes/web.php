<?php
/*Copyright (C) 2022 Prof Matias Garcia para -http://www.profmatiasgarcia.com.ar- con licencia GNU GPL3.
Este programa es software libre. Puede redistribuirlo y/o modificarlo bajo los términos de la Licencia Pública General de GNU según es publicada por la Free Software Foundation, bien con la versión 3 de dicha Licencia o bien (según su elección) con cualquier versión posterior. Este programa se distribuye con la esperanza de que sea útil, pero SIN NINGUNA GARANTÍA, incluso sin la garantía MERCANTIL implícita o sin garantizar la CONVENIENCIA PARA UN PROPÓSITO PARTICULAR. Véase la Licencia Pública General de GNU para más detalles.
Debería haber recibido una copia de la Licencia Pública General junto con este programa. Si no ha sido así ingrese a -http://www.gnu.org/licenses/ -*/
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('productos', function(){
	dd(\App\Producto::all());
})->name('producto.index');*/

route::get('productos', [ProductoController::class, 'index'])->name('producto.index');
route::get('productos/crear', [ProductoController::class, 'create'])->name('producto.create');
route::post('productos/crear',  [ProductoController::class, 'store'])->name('crearproducto');
route::get('productos/{id}', [ProductoController::class, 'show'])->name('producto.show');
