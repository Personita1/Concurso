<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Concurso</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    </head>
    <body>
        <!-- Titulo y formulario para ingresar al concurso -->
        <div class="pt-5 mb-3 col-8 mx-auto">
            <div class="bg-light mb-3 py-2 shadow justify-content-center">

                <!-- Nombre del concurso -->
                <div class="text-center mt-2 fs-2 fw-bold">
                    Concurso Maravilloso
                </div>
                <!-- Elegir ganadores -->
                <p class="text-center fw-light"> Para elegir cada ganador presiona el botón rojo un máximo de 3 veces </p>
                <div class="d-flex justify-content-center">
                    <button class="btn btn-danger"> Elegir </button>
                </div>
            </div>
        </div>

        <!-- Listado de ganadores que se va llenando cuando se presiona el botón -->
        <div class="pt-5 mb-3 col-8 mx-auto">
            <div class="bg-light mb-3 py-2 shadow justify-content-center">

                <!-- Ganadores del concurso -->
                <div class="text-center mt-2 fs-2 fw-bold">
                    Ganadores del concurso
                </div>
                <p class="text-center fw-light"> Estos son los ganadores del concurso, con su dirección de correo </p>
                
            </div>
        </div>
    </body>
</html>