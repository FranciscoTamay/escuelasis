<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alumnos</title>
    <!-- TOKEN DE VUE  -->
    <meta name="token" id="token" value="{{ csrf_token() }}">
</head>
<body>
    <!-- Inicio de VUE -->
    <div id="alumnos">
    <div class="container">
    <div class="card card-warning">
    <div class="card-header">
    <h4>Alumnos</h4>
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
        </thead>

        <tbody>
        <tr >
            <td>Matricula</td>
            <td>@{{mensaje}}</td>
            <td>Apellidos</td>
            <td>Grupo</td>
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
</body>
</html>
