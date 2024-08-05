<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHHH! - Librería</title> 
    <link rel="stylesheet" href="./estilos/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

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

<!-- VENTANA MODAL -->
<div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="cartModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartModalLabel">Carrito de Compras</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <?php include 'ver_carrito.php';?> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          <button type="button" class="btn btn-primary">Finalizar Compra</button>
        </div>
      </div>
    </div>
  </div>
  
  
  
  <!--- Carrusel banner -->

     <main class="container">
      <div id="carouselExampleDark" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active" data-bs-interval="10000">
            <img src="./imagenes/libro.banner1.sk.terror.png" class="d-block w-100" alt="libro1.SHHH">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <div class="carousel-item" data-bs-interval="2000">
            <img src="./imagenes/libro.minotauro.2.png" class="d-block w-100" alt="libro.2shhh">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
          <div class="carousel-item">
            <img src="./imagenes/libro.ira.banner3.png" class="d-block w-100" alt="libro.shh4">
            <div class="carousel-caption d-none d-md-block">
             
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
      
      
      <!-- Galeria -->
      <div class="row py-5">
        <div class="col">
            <div class="border-bottom">
                <h2 class="text-left">Novedades</h2>
            </div>
            
        </div>
      </div> 

      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="class-img-top" src="./imagenes/libro1.png">
                <div class="card-body">
                    <h5 class="card-title">La Asistenta</h5>
                    <p class="card-text">$34.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro1">
                        <input type="hidden" name= "producto_precio" value="34.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="./imagenes/libro2.png"> 
                <div class="card-body">
                    <h5 class="card-title">Hábitos Atómicos</h5>
                    <p class="card-text">$20.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro2">
                        <input type="hidden" name="producto_precio" value="20.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="./imagenes/libro3.png">
                <div class="card-body">
                    <h5 class="card-title">Buzón de impuras</h5>
                    <p class="card-text">$22.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro3">
                        <input type="hidden" name="producto_precio"  value="22.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="class-img-top" src="./imagenes/libro13.png">
                <div class="card-body">
                    <h5 class="card-title">Julio Verne - Novelas</h5>
                    <p class="card-text">$18.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro13">
                        <input type="hidden" name="producto_precio"  value="18.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <!-- Mas Vendidos -->

      <div class="row py-5">
        <div class="col">
            <div class="border-bottom">
                <h2 class="text-left">Más Vendidos</h2>
            </div>
            
        </div>
      </div> 

      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="class-img-top" src="./imagenes/libro4.png">
                <div class="card-body">
                    <h5 class="card-title">El Padrino</h5>
                    <p class="card-text">$22.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto"value="libro4">
                        <input type="hidden" name="producto_precio"  value="22.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="./imagenes/libro5.png"> 
                <div class="card-body">
                    <h5 class="card-title">Bowie</h5>
                    <p class="card-text">$18.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro5">
                        <input type="hidden" name="producto_precio" value="18.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="./imagenes/libro6.png">
                <div class="card-body">
                    <h5 class="card-title">El silencio de las estrellas</h5>
                    <p class="card-text">$27.500</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro6">
                        <input type="hidden" name="producto_precio"  value="27.500">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="class-img-top" src="./imagenes/libro7.png">
                <div class="card-body">
                    <h5 class="card-title">El Arte de Alfres Hitchcock</h5>
                    <p class="card-text">$15.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro7">
                        <input type="hidden" name="producto_precio"  value="15.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
      </div>

      <!-- Promos -->

      <div class="row py-5">
        <div class="col">
            <div class="border-bottom">
                <h2 class="text-left">Promos Con Amor &#128156; </h2>
            </div>
            
        </div>
      </div> 

      <div class="row">
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="class-img-top" src="./imagenes/libro8.png">
                <div class="card-body">
                    <h5 class="card-title">El Exorcista</h5>
                    <p class="card-text">12.500</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro8">
                        <input type="hidden" name="producto_precio"  value="12.500">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="./imagenes/libro9.png"> 
                <div class="card-body">
                    <h5 class="card-title">Mago de Oz</h5>
                    <p class="card-text">$8.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro9">
                        <input type="hidden" name="producto_precio"  value="7.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="card-img-top" src="./imagenes/libro10.png">
                <div class="card-body">
                    <h5 class="card-title">H.P Lovecraft</h5>
                    <p class="card-text">$5.500</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto" value="libro10">
                        <input type="hidden" name="producto_precio"  value="5.500">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-12 col-sm-6 col-lg-3 mb-4">
            <div class="card">
                <img class="class-img-top" src="./imagenes/libro11.png">
                <div class="card-body">
                    <h5 class="card-title">Cuentos de misterio</h5>
                    <p class="card-text">$4.000</p>
                    <form action="añadir_al_carrito.php" method="post">
                        <input type="hidden" name="nombre_producto"value="libro11">
                        <input type="hidden" name="producto_precio" value="4.000">
                        <button type="submit" class="btn btn-secondary">Añadir al carrito</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
      








    </main>
 

    <!--Js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
     <!-- Js main -->
    <script src="./js/script.js"></script>
</body>
</html>