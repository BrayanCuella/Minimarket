<?php

namespace App\Http\Controllers;

use App\Models\producto;
use Illuminate\Http\Request;

class Productocontroller extends Controller
{
    public function index(){
        $productos = producto::all();
        return view('productos.index',['productos'=> $productos]);
    }

    public function create(){
        return view('productos.create');
}
public function almacenar(Request $request){
    $producto = new producto();
    $producto->nombre =$request->nombre;
    $producto->descripcion =$request->descripcion;
    $producto->fecha = $request->fecha;
   
    $producto->ulr =$request->ulr;
    $producto->interes =$request->interes;
    $producto->seleccionar =$request->seleccionar;



    $producto-> save();

    return $this->index();
}
public function editar($id){
    $producto= producto::where('id_producto', $id)->first();
    return view('productos.editar',['producto'=>$producto]);
}
public function actualizar(Request $request, $id){
    $producto = Producto::where('id_producto',$id)->update([
        'nombre' =>$request->nombre,
        'descripcion' =>$request->descripcion,
        'fecha' =>$request->fecha,
        'ulr' =>$request->ulr,
        'interes' =>$request->interes,
        'seleccionar' =>$request->seleccionar,




    ]);
if ($producto){

    return redirect(url('/productos'));
}
return 0;
}
public function eliminar($id){
    $producto = Producto::where('id_producto',$id)->delete();

if ($producto){

    return redirect(url('/productos'));
}
return 0;
}

}
