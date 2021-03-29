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
     public function all()
     {
        $result = Concursantes::select('nombre,correo');
        dd($result);
        return('informeTodos', $result);
    }

    public function ciudad()
     {
        $result = Concursantes::select('ciudad, nombre')->orderBy(ciudad);
        dd($result);
        return('informeTodos', $result);
    }

    public function primeros(){
        $result = Concursantes::select('nombre')->take(5);
        dd($result);
        return('informeTodos', $result);
    }

    public function ultimos(){
        $result = Concursantes::select('nombre')->orderBy(inscripcion, desc)->take(5);
        dd($result);
        return('informeTodos', $result);
    }
}