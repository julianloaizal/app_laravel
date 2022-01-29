<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Producto;
use Illuminate\Support\Facades\DB;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)//espero un objeto que recibo desde el formulario por medio de request
    {
        //
        $texto=trim($request->get('texto')); //declaración variable, que es lo que tengo en el objeto por medio de request
        //se hace referecnia al facade DB
        $productos=DB ::table('producto')
                        ->select('id','nombre','talla', 'marca_producto','cantidad_inventario','fecha_embarque')
                        ->where('nombre', 'LIKE', '%'.$texto.'%')
                        ->orwhere('talla', 'LIKE', '%'.$texto.'%')
                        ->orwhere('marca_producto', 'LIKE', '%'.$texto.'%')
                        ->orwhere('cantidad_inventario', 'LIKE', '%'.$texto.'%')
                        ->orwhere('fecha_embarque', 'LIKE', '%'.$texto.'%')
                        ->orderBy('nombre', 'asc')
                        ->paginate(10);
        return view('producto.index', compact('productos', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('producto.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $producto = new Producto;
        $producto->nombre=$request->input('nombre');
        $producto->talla=$request->input('talla');
        $producto->marca_producto=$request->input('marca_producto');
        $producto->cantidad_inventario=$request->input('cantidad_inventario');
        $producto->fecha_embarque=$request->input('fecha_embarque');
        $producto->save();
        return redirect()->route('producto.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto=Producto::findOrFail($id);
        return view('producto.edit',compact('producto'));
        //return $producto;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $producto=Producto::findOrFail($id);
        $producto->nombre=$request->input('nombre');
        $producto->talla=$request->input('talla');
        $producto->marca_producto=$request->input('marca_producto');
        $producto->cantidad_inventario=$request->input('cantidad_inventario');
        $producto->fecha_embarque=$request->input('fecha_embarque');
        $producto->save();
        return redirect()->route('producto.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $producto=Producto::findOrFail($id);
        $producto->delete();
        return redirect()->route('producto.index');
    }
    
}
