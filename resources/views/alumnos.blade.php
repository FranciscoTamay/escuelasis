<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <!-- TOKEN DE VUE  -->
    <meta name="token" id="token" value="{{ csrf_token() }}">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <!-- Inicio de VUE -->
    <div id="alumnos">
    <div class="container">
    <div class="card card-warning">
    <div class="card-header">
    <h4>Alumnos <button class="btn btn-primary"><i class="fa-solid fa-plus"></i></button></h4>
    </div>
    <!-- card-header -->
    <div class="card-body">
    <div class="row">
        <div class="col-md-6">
        <input type="text" placeholder="Escriba el nombre del Alumnos"  class="form-control">
        </div>
        
    </div><br>
    <!-- row del input -->

    <!-- INICIO DE LA TABLA  -->
    <div class="row">
    <table class="table align-items-center mb-0">
    <thead>
        <th>Matricula</th>
        <th>Nombre</th>
        <th>Apellidos</th>
        <th>Grado</th>
        <th>Acciones</th>
        </thead>

        <tbody>
        <tr v-for="alumno in alumnos">
            <td>@{{alumno.matricula}}</td>
            <td>@{{alumno.nombre}}</td>
            <td>@{{alumno.apellidos}}</td>
            <td>@{{alumno.grupo}}</td>
            <td>
                <button class="btn btn-success"><i class="fa-solid fa-pencil"></i></button>
                <button class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>
            </td>
        </tr>
        </tbody>
    </table>
    <!-- FIN DE LA TABLA -->
    </div>
    <!-- row de la tabla -->
    </div>
    <!-- card-body -->
    </div>
    <!-- card-warnigng -->
    </div>
    </div>
    <!-- Fin de VUE -->
    <!-- js a usar -->
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/apis/alumnosCrud.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/vue-resource.js')}}"></script>
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/714fbe6707.js" crossorigin="anonymous"></script>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>
