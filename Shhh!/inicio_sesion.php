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
                <a class="nav-link" href="registrousuario.php">Registrate</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Libros 
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Novedades</a></li>
                  <li><a class="dropdown-item" href="#">Más Vendidos</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">PROMOS!!&#128156;&#127881; </a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">
                    <img src="./imagenes/18515135521707894840-128.png" width="25px"> 
                </a>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Buscar.." aria-label="Search">
              <button class="btn btn-outline-secondary" type="submit">Buscar</button>
            </form>
          </div>
        </div>
      </nav> 

      <main class="container">
        <div class="row py-5">
            <div class="col-6">
                <div class="border-bottom">
                    <h2 class="text-left">Inicia tu sesion</h2>
                </div>
                
            </div>
          </div> 

          <!--Formulario inicio sesion -->

        <div class="row mt-3">
            <div class="col-6">
                <form action="" method="" onsubmit="return validateLogin()">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingresa tu email">
                      <small id="emailHelp" class="form-text text-muted">No compartiremos su email con nadie mas</small>
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Ingresa tu password">
                    </div>
                    <div class="row py-2"> </div>
                    <button type="submit" class="btn btn-primary">Entrar</button>
                    </div>
                  </form>
              </div>
        </div>
      </main>

      <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Librería en Línea. Todos los derechos reservados.</p>
    </footer>
    
    <script>
    function validateLogin() {
        let email = document.getElementById('email').value;
        let contraseña = document.getElementById('contraseña').value;
        let passwordHelp = document.getElementById('passwordHelp');

        if (!validatePassword(contraseña)) {
            passwordHelp.textContent = 'La contraseña debe tener al menos 8 caracteres, incluyendo una letra mayúscula, una letra minúscula y un número.';
            passwordHelp.style.color = 'red';
            return false;
        }

        return true;
    }
     function validatePassword(contraseña) {
        const re = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/;
        return re.test(contraseña);
    }
    </script>



      <!--Js Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Js main -->
   <script src="./js/script.js"></script>
</body>
</html>