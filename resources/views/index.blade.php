<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Inicio</title>
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/styles.css" />
  <script src="https://www.gstatic.com/firebasejs/5.5.5/firebase.js"></script>
  <script>
    // Initialize Firebase
    var config = {
      apiKey: "AIzaSyBs-k8Lz8KBqhmG0JshSJz55iU9_eKE5BE",
      authDomain: "capor-b6936.firebaseapp.com",
      databaseURL: "https://capor-b6936-default-rtdb.firebaseio.com",
      projectId: "capor-b6936",
      storageBucket: "capor-b6936.appspot.com",
      messagingSenderId: "21529871202",
      appId: "1:21529871202:web:5380ccd12b780968e1e23b"
    };
    firebase.initializeApp(config);
  </script>
  <meta name="token" id="token" value="{{ csrf_token() }}">
  <enlace href="https://fonts.cdnfonts.com/css/sans-comic-sans" rel="hoja de estilo">
    <link href="css/stylee.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
    <link href="https://cdn.datatables.net/responsive/2.2.6/css/responsive.dataTables.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.6/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <!-- Font Awesome Icons -->
    <script type="text/javascript" src="{{asset('js/vue.js')}}"></script>
</head>

<body>
  <!-- #region ENCABEZADO -->
  <header class="header" id="header">
    <nav class="nav container">
      <h2>LISTA</h2>
      <div class="nav__menu" id="nav-menu">
        <ul class="nav__list">
          <li class="nav__item">
            <a href="#asistencia" class="nav__link active-link">Asisitencia</a>
          </li>
          <li class="nav__item">
            <a href="#estado" class="nav__link">Estado</a>
          </li>
          <li class="nav__item">
            <a href="#alumnos" class="nav__link">Alumnos</a>
          </li>
          <li class="nav__item">
            <a href="#profesores" class="nav__link">Profesores</a>
          </li>
          <a href="#" class="button button--ghost">Iniciar sesion</a>
        </ul>
        <div class="nav__close" id="nav-close">
          <i class="bx bx-x"></i>
        </div>
      </div>
      <div class="nav__toggle" id="nav-toggle">
        <i class="bx bx-grid-alt"></i>
      </div>
    </nav>
  </header>
  <!-- #endregion -->
  <!-- #region Principal-->
  <main class="main">
    <!--Menu Asisitencia-->
    <section class="home container" id="asistencia">
      <div class="container">
        <pre></pre>
        <div class="card">
          <div class="card-header">
            <h3>Resumen de asistencia</h3>
          </div>
          <div class="card-body">
            <button type="button" class="btn btn-darck" id="export">
              <i class="fa fa-download" aria-hidden="true"></i>
            </button>
            <div class="table-responsive">
              <table class="table table-bordered display responsive nowrap" id="buttonTable" width="100%" cellspacing="0" data-order="[]">
                <thead class="thead-dark">
                  <tr>
                    <th>Usuario</th>
                    <th>Asunto</th>
                    <th>Tiempo</th>
                    <th>Estado</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
        <span>
        </span>
        <!--estado-->
        <div class="card mt-4" id="estado">
          <div class="card-header" ">
              <h3>Estado</h3>
            </div>
            <div class=" card-body users">
          </div>
        </div>
      </div>
    </section>
    <div class="container">
        <pre></pre>
        <div class="card">
          <div class="card-header">
            <h3>Edicono aun...alumnos</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered display responsive nowrap" id="buttonTable" width="100%" cellspacing="0" data-order="[]">
                <thead class="thead-dark">
                  <tr>
                    <th>Nombre</th>
                    <th>apellido</th>
                    <th>matricula</th>
                    <th>id</th>
                  </tr>
                </thead>
              </table>
            </div>
          </div>
        </div>
      </div>
    <!--lista empleados-->
    <section class="section trick" id="alumnos">

    </section>
    <!--Nuevos items-->
    <section class="section new" id="profesores">

    </section>

  </main>
  <!--Pie de pagina-->


  <!--Scroll para que se revelen los elementos de forma suave-->
  <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
  <script type="text/javascript" src="js/vue-resource.js"></script>
  <!--Deslizar elementos en una lista-->
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
  <script src="./assets/js/main.js"></script>
  <script type="text/javascript" src="js/apis/asis.js"></script>
</body>

</html>