<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Concursante;
use Illuminate\Http\Request;

class ConcursanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $persona = new Concursante;
        $persona->nombre = $request->nombre;
        $persona->documento = $request->documento;
        $persona->ciudad = $request->ciudad;
        $persona->correo= $request->correo;
        $persona->celular = $request->celular;
        $persona->save();
        return view('welcome');
        
    }
}