<?php

namespace App\Http\Controllers;

use App\Models\Articulo;
use Illuminate\Http\Request;
use App\Http\Requests\Articulo\Create;
use App\Http\Requests\Articulo\Read;
use App\Http\Requests\Articulo\Update;
use App\Http\Requests\Articulo\Delete;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if( auth()->user()->id ){

            $articulos = Articulo::orderBy('created_at', 'desc')
                ->get();

            return view('articulo.index', compact('articulos'));

        }else{

            return redirect('/');
            
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Create $request)
    {
        try {

            $request->file('img')->move('media', $request->file('img')->getClientOriginalName());

            if( file_exists(public_path('media/'.$request->file('img')->getClientOriginalName())) ){

                $articulo = Articulo::create([

                    'nombre' => $request->nombre,
                    'imgArticulo' => $request->file('img')->getClientOriginalName(),
                    'url' => $request->url
    
                ]);
    
                if( $articulo->id ){
    
                    $datos['exito'] = true;
    
                }

            }else{

                $datos['exito'] = false;
                $datos['mensaje'] = 'No fue posible archivar la portada.';

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();
        }

        return response()->json($datos);
    }

    /**
     * Display the specified resource.
     */
    public function show(Read $request)
    {
        try {
            
            $articulo = Articulo::find($request->id);

            if( $articulo->id ){

                $datos['exito'] = true;
                $datos['nombre'] = $articulo->nombre;
                $datos['url'] = $articulo->url;
                $datos['img'] = $articulo->imgArticulo;
                $datos['id'] = $articulo->id;

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json($datos);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Articulo $articulo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Update $request)
    {
        try {

            $articulo = Articulo::where('id', '=', $request->id)
                ->update([

                    'nombre' => $request->nombre,
                    'url' => $request->url

                ]);

            $datos['exito'] = true;

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json($datos);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delete $request)
    {
        try {
            
            $articulo = Articulo::find($request->id);

            if( $articulo->id ){

                $articulo->delete();

                $datos['exito'] = true;

            }

        } catch (\Throwable $th) {
            
            $datos['exito'] = false;
            $datos['mensaje'] = $th->getMessage();

        }

        return response()->json($datos);
    }
}
