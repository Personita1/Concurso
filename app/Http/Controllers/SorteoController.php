<?php 

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Concursante;
use Illuminate\Http\Request;

 class SorteoController extends Controller {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function pick()
     {
        $result = Concursantes::select('nombre,correo')->inRandomOrder()->first();
        dd($result);
        return view('sorteo')
            ->with('nombre', $result->nombre)
            ->with('correo', $result->correo);
    
}