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
        <!--Scripts -->
        
    </head>
    <body>
        <!-- Titulo y formulario para ingresar al concurso -->
        <div class="pt-5 mb-3 col-8 mx-auto">
            <div class="bg-light mb-3 shadow justify-content-center">

                <!-- Nombre del concurso -->
                <div class="text-center mt-2 fs-2 fw-bold">
                    Concurso Maravilloso
                </div>
                <div>
                    <p class="px-2 fs-5 text-center">
                        Para participar en el concurso maravilloso y ganar los maravillosos premios asegurate de rellenar todos los campos que contengan el *
                    </p>
                </div>
                <!-- Formulario para ingresar -->
                <form action="{{ url('/agregarConcursante') }}" method="POST" enctype="multipart/form-data" id='formNuevoConcursante' name="nuevoConcursante" onsubmit="return validateForm()" class="px-2 py-2 mb-3">
                    @csrf
                    <div class="row">
                        <!-- Petición de información básica sobre el concursante -->
                        <div>
                            <p class="mt-2 fw-light"> Ingresa tu número de documento, nombre y ciudad. ¡Solo puedes inscribirte una vez!</p>
                        </div>
                        <!-- Petición número de documento -->
                        <div class="col-4 mb-3">
                            <label for="documento" class="form-label fw-bold">Número de documento*</label>
                            <input type="number" class="form-control" name="documento" id="documento" placeholder="1000300421" maxlength="10" required>
                        </div>
                        <!-- Petición del nombre completo -->
                        <div class="col-4 mb-3">
                            <label for="nombre" class="form-label fw-bold">Nombre completo*</label>
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Pepito Perez" required>
                        </div>
                    </div>
                    <!-- Seleccionador de ciudad, código obtenido de https://gist.github.com/loorlab/96c797470773fa8dd2af1d2246f95a78 -->
                    <div class="col-4 mb-3">
                        <label for="ciudad" class="control-label fw-bold">Ciudad*</label>
                            <select class="form-control" name="ciudad" id="ciudad" required>
                                <option value="Arauca">Arauca</option>
                                <option value="Armenia">Armenia</option>
                                <option value="Barranquilla">Barranquilla</option>
                                <option value="Bogotá">Bogotá</option>
                                <option value="Bucaramanga">Bucaramanga</option>
                                <option value="Cali">Cali</option>
                                <option value="Cartagena">Cartagena</option>
                                <option value="Cúcuta">Cúcuta</option>
                                <option value="Florencia">Florencia</option>
                                <option value="Ibagué">Ibagué</option>
                                <option value="Leticia">Leticia</option>
                                <option value="Manizales">Manizales</option>
                                <option value="Medellín">Medellín</option>
                                <option value="Mitú">Mitú</option>
                                <option value="Mocoa">Mocoa</option>
                                <option value="Montería">Montería</option>
                                <option value="Neiva">Neiva</option>
                                <option value="Pasto">Pasto</option>
                                <option value="Pereira">Pereira</option>
                                <option value="Popayán">Popayán</option>
                                <option value="Puerto Carreño">Puerto Carreño</option>
                                <option value="Puerto Inírida">Puerto Inírida</option>
                                <option value="Quibdó">Quibdó</option>
                                <option value="Riohacha">Riohacha</option>
                                <option value="San Andrés">San Andrés</option>
                                <option value="San José del Guaviare">San José del Guaviare</option>
                                <option value="Santa Marta">Santa Marta</option>
                                <option value="Sincelejo">Sincelejo</option>
                                <option value="Tunja">Tunja</option>
                                <option value="Valledupar">Valledupar</option>
                                <option value="Villavicencio">Villavicencio</option>
                                <option value="Yopal">Yopal</option>
                            </select>
                    </div>
                    <!-- Petición de correo electrónico y celular para contacto -->
                    <div>
                        <p class="mt-2 fw-light"> Para poder contactarte, por favor escribe tu correo electrónico y tu número de celular</p>
                    </div>
                    <div class="row row-cols-lg-auto g-3 align-items-center mb-3">
                        <!-- Petición de correo electrónico -->
                        <div class="col-10">
                            <label for="correo" class="form-label fw-bold">Correo electrónico*</label>
                            <input type="email" class="form-control" name="correo" id="correo" placeholder="nombre@ejemplo.com" required>
                        </div>
                        <!-- Petición de número de celular -->
                        <div class="col-12">
                            <label for="celular" class="form-label fw-bold"> Celular* </label>
                            <input type="number" class="form-control" name="celular" id="celular" placeholder="333333333" maxlength="10" required>
                        </div>
                    </div> 
                    <!-- Boton para participar -->
                    <button type="submit" class="btn btn-success d-flex justify-content-center mb-3">Participar</button>
                </form>
            </div>
        </div>
    </body>
</html>
