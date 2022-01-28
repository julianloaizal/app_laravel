<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Marca;
use Illuminate\Support\Facades\DB;

class MarcaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$marcas=Marca::all();
        //return view('marca.index', compact('marcas'));
        $texto=trim($request->get('texto')); //declaración variable, que es lo que tengo en el objeto por medio de request
        //se hace referecnia al facade DB
        $marcas=DB ::table('marca')
                        ->select('id','nombre') 
                        ->where('nombre', 'LIKE', '%'.$texto.'%')                       
                        ->orderBy('nombre', 'asc')
                        ->paginate(10);
        return view('marca.index', compact('marcas', 'texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('marca.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $marca = new Marca;
        $marca->nombre=$request->input('nombre');
        $marca->save();
        return redirect()->route('marca.index');
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
        $marca=Marca::findOrFail($id);
        //return view('marca.edit', compact('marca'));
        return marca;
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
