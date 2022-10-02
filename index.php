<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Crear Usuario</title>
</head>
<body>

<?php 
  if(isset($_GET["idUser"])){
    include("./class/usuario.php");
    $usuario = new Usuario();
    $dataUsuario = $usuario->obtenerUsuarioPorId($_GET["idUser"]);
  };
?>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <img src="./imagenes/logo_pequeno.jpg" alt="" width="70px">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="./index.html">Home</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./paginas/Galeria.html">Galeria</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="./listadoUsuarios.php">Lista de usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" href="./crearUsuario.php">Contactenos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<br><br>
<div class="container mt-5">
    
</div>
<br><br>
<body class="container-fluid">
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <img src="./imagenes/logo_pequeno.jpg" alt="" width="70px">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="./index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./paginas/Galeria.html">Galeria</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./listadoUsuarios.php">Lista de usuarios</a>
                    </li>
                    <!-- li class="nav-item">
                        <a class="nav-link" href="./crearUsuario.php">Contactenos</a>
                    </li-->

                </ul>
            </div>
        </div>
    </nav>


    <section class="row">

        <div class="col-12">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                        class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./imagenes/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imagenes/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="./imagenes/3.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>

    <section class="row mt-5">
        <div class="col-12 text-center">
            <div class="row">
                <div class="col-12">
                    <h2> COMESTIBLES KAJAN </h2>
                    <small>TORTAS, CUPCAKES Y GALLETAS</small>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-12">
                    <video src="./videos/1.mp4" autoplay muted loop controls width="580" height="240"></video>
                </div>
            </div>
        </div>
    </section>

    <section class="row mt-5 bg-white d-flex justify-content-center py-5">
        <div class="col-4 ">
            <div class="mb-3 text-center">
                <label for="exampleFormControlInput1" class="form-label fs-1">CONTÁCTENOS</label>
            </div>
            <div class="col">
              <div class="row">
                <div class="col-12 d-flex justify-content-center">
                <form 
                    <?php 
                    if(isset($_GET["idUser"])){
                        echo "action ='./controller/actualizarUsuario.php'"; 
                        echo "method='put'"; 
                    } else {
                        echo "action ='./controller/crearUsuario.php'"; 
                        echo "method='post'";
                    }
                    ?>
                    name="formUsuario"
                    >
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="nombre" 
                        name="nombre" 
                        placeholder="nombre"
                        <?php 
                          if(isset($_GET["idUser"])){
                            echo "value = ". $dataUsuario["nombre"];
                          }
                        ?>
                        >
                    </div>
                    <div class="mb-3">
                        <label for="apellido" class="form-label">Apellido</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="apellido" 
                        name="apellido" 
                        placeholder="apellido"
                        <?php 
                          if(isset($_GET["idUser"])){
                            echo "value = ". $dataUsuario["apellido"];
                          }
                        ?>
                        >
                    </div>
                    <div class="mb-3">
                        <label for="direccion" class="form-label">Dirección</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="direccion" 
                        name="direccion" 
                        placeholder="direccion"
                        <?php 
                          if(isset($_GET["idUser"])){
                            echo "value = ". $dataUsuario["direccion"];
                          }
                        ?>
                        >
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input 
                        type="text" 
                        class="form-control" 
                        id="telefono" 
                        name="telefono" 
                        placeholder="telefono"
                        <?php 
                          if(isset($_GET["idUser"])){
                            echo "value = ". $dataUsuario["telefono"];
                          }
                        ?>
                        >
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input 
                        type="email" 
                        class="form-control" 
                        id="email" name="email" 
                        placeholder="email"
                        <?php 
                          if(isset($_GET["idUser"])){
                            echo "value = ". $dataUsuario["email"];
                          }
                        ?>
                        >
                    </div>
      
                    <?php 
                      if(isset($_GET["idUser"])){
                        echo "<input type='hidden' name='idUsuario' value='".$dataUsuario["id"]."'>";
                      }
                    ?>
                    
                    <div class="d-grid gap-2">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
      
      
              </div>
    
            </div>
        </div>
      </div>
    </section>
    <footer class="footer mt-auto py-3 bg-light pt-3">
        <div class="container">
            <div class="row text-center">
                <div class="col">
                    <h5>Siguenos en nuestras redes sociales!</h5>
                </div>
            </div>
            <div class="row text-center d-flex justify-content-center">
                <div class="col">
                    <a href="#">
                        Facebook
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        Instagram
                    </a>
                </div>
                <div class="col">
                    <a href="#">
                        Twitter
                    </a>
                </div>
            </div>

        </div>
    </footer>
    

<script src="./js/bootstrap.min.js"></script>
</body>
</html>



<?php


