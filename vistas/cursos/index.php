<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>App de Parcial_Ramos</title>
</head>
<body>
    <br>
    <br>
    <br>
    <div class="container">
        <h1 class="text-center">Formulario de Ingreso de informacion de los curos impartidos en la Escuela de informatica y Ciberdefensa</h1>
        <div class="row justify-content-center">
            
            <form action="/parcial_ramos/controladores/cursos/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">

                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_nombre">Nombre del Curso:</label>
                        <input type="text" name="curso_nombre" id="curso_nombre" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_periodos">Cantidad de Periodos:</label>
                        <input type="number" name="curso_periodos" id="curso_periodose" class="form-control">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col">
                        <label for="curso_fase">Fase en la que se imparte:</label>
                        <input type="number" name="curso_fase" id="curso_fase" class="form-control">
                    </div>
                </div>


                <div class="row mb-3">
                    <div class="col">
                        <label for="instructor_nombre">Nombre del Instructor:</label>
                        <input type="text" name="instructor_nombre" id="instructor_nombre" class="form-control">
                    </div>
                </div>



                <div class="row mb-3">
                    <div class="col">
                        <label for="creditos_curso">Credito Correspondiente al Curso:</label>
                        <input type="float" name="creditos_curso" id="creditos_curso" class="form-control">
                    </div>                                       
                </div>


                <div class="row mb-3">
                    <div class="col">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>                
                </div>

            </form>
        </div>
    </div>
</body>
</html>