<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Libro</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   
   
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php">
            <img src="./imagenes/Proyecto Creador de logotipos.png" width="200px">
          </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="inicio_sesion.php">Inicia Sesion</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="registrousuario.php">Regístrate</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Libros 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="novedades.php">Novedades</a></li>
                  <li><a class="dropdown-item" href="masvendidos.php">Más Vendidos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="promos.php">PROMOS!!&#128156;&#127881; </a></li>
                </ul>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" data-bs-toggle="modal" data-bs-target="#cartModal">
                    <img src="./imagenes/18515135521707894840-128.png" width="25px"> 
                </a>
              </li>
            </ul>
            
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav>
      <!-- END NAVBAR -->
   
   
   
      <main class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h2>Agregar Libro</h2>
                <form action="añadir_libro.php" method="POST">
                    <div class="form-group">
                        <label for="titulo">Título:</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                    </div>
                    <div class="form-group">
                        <label for="autor">Autor:</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                    </div>
                    <div class="form-group">
                        <label for="precio">Precio:</label>
                        <input type="number" class="form-control" id="precio" name="precio" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad en Inventario:</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar Libro</button>
                </form>
            </div>
        </div>
    </main>
   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
