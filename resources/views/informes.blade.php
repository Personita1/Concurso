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
        <!-- Informes pedidos -->
        <div class="pt-5 mb-3 col-8 mx-auto">
            <div class="bg-light mb-3 py-2 shadow justify-content-center">

                <!-- Nombre del concurso -->
                <div class="text-center mt-2 fs-2 fw-bold">
                    Informes
                </div>
                <!-- Elegir ganadores -->
                <p class="text-center fw-light"> Seleccione el informe que desea obtener </p>
                <div class="d-flex justify-content-center">
                          <a class="btn btn-success mx-2" href="#">Todos los concursantes</a>
                          <a class="btn btn-success mx-2" href="#">Por ciudad</a>
                          <a class="btn btn-success mx-2" href="#">Primeros 5</a>
                          <a class="btn btn-success mx-2" href="#">Últimos 5</a>
                </div>
            </div>
        </div>
    </body>
</html>