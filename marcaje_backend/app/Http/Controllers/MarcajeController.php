<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\marcacion;
use App\Models\Employee;
use Illuminate\Support\Facades\DB;

class MarcajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
            Mostrar todos los registros
        */
        $histEmployees = marcacion::all();
        return response()->json($histEmployees);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*
            Crear un nuevo registro
        */
        $histEmployee = marcacion::create($request->all());
        return response()->json([
            'message' => "history Employee saved successfully!",
            'HistEmployee' => $histEmployee
        ], 200);
    }

    /* funcion para verificar el historial del usuario
       por medio de su id y fecha del dia
    */
    public function historialUsuario($id_user,$date)
    {   
        $historial_emp = marcacion::where('id_user',$id_user)->where('date',$date)->get();
        
        return response()->json($historial_emp, 200);
    }

}
