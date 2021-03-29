<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 class SorteoController extends Controller {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function pick()
     {
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','','concurso');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"ajax_demo");
        $sql="SELECT nombre, correo FROM concursantes ORDER BY RAND() LIMIT 1";
        $result = mysqli_query($con,$sql);
        dd($result);
        return view('sorteo')
            ->with('nombre', $result->nombre)
            ->with('correo', $result->correo);
    
}