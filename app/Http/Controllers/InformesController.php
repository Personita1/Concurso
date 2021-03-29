<?php 
namespace App\Http\Controllers;
use Illuminate\Http\Request;
 class SorteoController extends Controller {
     /**
      * Display a listing of the resource.
      *
      * @return \Illuminate\Http\Response
      */
     public function all()
     {
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','','concurso');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"ajax_demo");
        $sql="SELECT nombre, correo FROM concursantes";
        $result = mysqli_query($con,$sql);
        dd($result);
        return('informeTodos', $result);
    }

    public function ciudad()
     {
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','','concurso');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"ajax_demo");
        $sql="SELECT ciudad, nombre FROM concursantes ORDER BY ciudad";
        $result = mysqli_query($con,$sql);
        dd($result);
    }

    public function primeros(){
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','','concurso');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"ajax_demo");
        $sql="SELECT nombre FROM concursantes LIMIT 5";
        $result = mysqli_query($con,$sql);
        dd($result);
    }

    public function ultimos(){
        $q = intval($_GET['q']);

        $con = mysqli_connect('localhost','root','','concurso');
        if (!$con) {
        die('Could not connect: ' . mysqli_error($con));
        }

        mysqli_select_db($con,"ajax_demo");
        $sql="SELECT nombre FROM concursantes ORDER BY inscripcion DESC LIMIT 5";
        $result = mysqli_query($con,$sql);
        dd($result);
    }
}