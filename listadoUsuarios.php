<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/estilos.css">
    <title>Listado de usuarios</title>
</head>
<body>

<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light mb-5">
    <div class="container-fluid">
      <img src="./imagenes/logo_pequeno.jpg" alt="" width="70px">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
          aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link " aria-current="page" href="./index.php">Home</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="./paginas/Galeria.html">Galeria</a>
          </li>
          <li class="nav-item">
              <a class="nav-link active" href="./listadoUsuarios.php">Lista de usuarios</a>
          </li>
          <!--li class="nav-item">
              <a class="nav-link" href="./crearUsuario.php">Contactenos</a>
          </li-->
        </ul>
      </div>
    </div>
</nav>


<?php 

  include("./class/usuario.php");
  $dataUsuario = new Usuario();

?>
<br><br>
<div class="container mt-5">
    <div class="row">
        <div class="col">
        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Dirección</th>
                    <th scope="col">Teléfono</th>
                    <th scope="col">email</th>
                    <th scope="col">Editar</th>
                    <th scope="col">Eliminar</th>
                </tr>
            </thead>
            <tbody>
              

              <?php
                foreach ( $dataUsuario->obtenerUsuarios() as $row) {
                 
                  echo "<tr>
                    <th scope='row'>".$row['id']."</th>
                    <td>".$row['nombre']."</td>
                    <td>".$row['apellido']."</td>
                    <td>".$row['direccion']."</td>
                    <td>".$row['telefono']."</td>
                    <td>".$row['email']."</td>
                    <td><a href='./crearUsuario.php?idUser=".$row['id']."'> Actualizar </a></td>
                    <td><a href='./controller/eliminarUsuario.php?idUser=".$row['id']."'> Eliminar </a></td>
                  </tr>";
                }
                              
              ?>
            </tbody>
        </table>



        </div>
    </div>
</div>
<br><br>
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


