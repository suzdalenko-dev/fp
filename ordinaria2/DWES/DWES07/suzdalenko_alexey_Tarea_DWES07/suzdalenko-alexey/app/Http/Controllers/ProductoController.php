<?php

namespace App\Http\Controllers;
use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    // Mostrar todos los productos
    public function index()
    {
        $productos = Producto::all();
        return view('show', ['productos' => $productos]);
    }

       // Formulario para editar un producto
       public function edit($id)
       {
           $producto = Producto::findOrFail($id);
           return view('edit', ['producto' => $producto]);
       }
   
       // Actualizar un producto
       public function update(Request $request, $id)
       {
           $producto = Producto::findOrFail($id);
   
           $producto->update([
               'nombre' => $request->input('nombre'),
               'nombre_corto' => $request->input('nombre_corto'),
               'descripcion' => $request->input('descripcion'),
               'pvp' => $request->input('pvp'),
               'familia' => $request->input('familia')
           ]);
   
           return redirect('/productos')->with('success', 'Producto actualizado correctamente');
       }
}
