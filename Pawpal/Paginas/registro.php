
    <!DOCTYPE html>
    <html lang="es">

    <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>PawPal</title>
      <link rel="stylesheet" href="../css/color.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>

    <body>

      <!-- Section: Design Block -->
      <section class="background-radial-gradient overflow-hidden">
        <style>

        </style>

        <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
          <div class="row gx-lg-5 align-items-center mb-5">
            <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
              <h1 class="my-5 display-5 fw-bold ls-tight" style="color:#733B2F">
                Paw Pal<br />
                <span style="color: black">"Un lazo de amor incondicional. Adopta hoy."</span>
              </h1>
              <p1 class="mb-4 opacity-70" style="color: black">
                ¡Bienvenido a nuestra página de adopción de mascotas!
                Encuentra tu compañero peludo perfecto y también ofrece tu mascota en adopción.
                Conectamos personas amorosas con animales necesitados de un hogar. ¡Adopta y cambia vidas!
                Ofrecemos perros, gatos y más. Todos los animales son evaluados y reciben atención veterinaria.
                Apoyamos tu decisión de poner a tu mascota en adopción. Ofrecemos recursos de cuidado y consejos
                para una vida feliz y saludable. ¡Adopta, salva vidas y encuentra la felicidad en cuatro patas!
              </p1>
            </div>

            <div class="col-lg-6 mb-5 mb-lg-0 position-relative">

              <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
              <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>

              <div class="card bg-glass">
                <div class="card-body px-4 py-5 px-md-5">

                  <!-- 2 column grid layout with text inputs for the first and last names -->
                  <div class="row">
                    <h3 class="my-5 display-5 fw-bold ls-tight" style="color:#733B2F">
                      Registro
                    </h3>
                    <form method="POST" action="registro.php">
                      
                      <?php 
                      if (isset($_POST['boton'])) {
                        if (!empty($_POST["nombre"]) && !empty($_POST["cp"]) && !empty($_POST["correo"]) && !empty($_POST["pass"]) && !empty($_POST["tel"])) {
                          
                          include("../abrirconexion.php");
                          
                          function validar($dato){
                            $dato = trim($dato);
                            $dato = stripslashes($dato);
                            $dato = htmlspecialchars($dato);
                            return $dato;
                          }

                          $nombre = validar($_POST['nombre']);
                          $cp = validar($_POST['cp']);
                          $correo = validar($_POST['correo']);
                          $password = md5(validar($_POST['pass']));
                          $tel = validar($_POST['tel']);
                      
                          $resultado = mysqli_query($conexion, "INSERT INTO $usuario (Nombre,Contrasenia,Telefono,Correo,Cp) values('$nombre','$password','$tel','$correo','$cp')");
                          header("Location: inicio.php");
                          mysqli_close($conexion);

                        } else {
                      
                          echo
                          "
                          <div class=\"form-outline mb-4 --bs-danger-bg-subtle text-danger-emphasis\">
                          <label class=\"form-label\" for=\"form3Example3\"> 
                          Hay algun campo vacio y por eso no se pudo crear el usuario
                          </label>
                          </div>

                          ";
                          
                        }
                      }
                      ?>
                        

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" class="form-control" name="nombre" />
                        <label class="form-label" for="form3Example3">Ingrese un nombre de usuario</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="text" id="form3Example3" class="form-control" name="cp" />
                        <label class="form-label" for="form3Example3">Ingrese su codigo postal</label>
                      </div>

                      <!-- Email input -->
                      <div class="form-outline mb-4">
                        <input type="email" id="form3Example3" class="form-control" name="correo" />
                        <label class="form-label" for="form3Example3">Ingrese su correo</label>
                      </div>

                      <div class="form-outline mb-4">
                        <input type="number" id="form3Example3" class="form-control" name="tel" />
                        <label class="form-label" for="form3Example3">Ingrese su numero celular</label>
                      </div>

                      <!-- Password input -->
                      <div class="form-outline mb-4">
                        <input type="password" id="form3Example4" class="form-control" name="pass">
                        <label class="form-label" for="form3Example4">Ingrese su contraseña</label>
                      </div>

                      <!-- Checkbox -->
                      <div class="form-check d-flex justify-content-center mb-4">
                      </div>

                      <!-- Submit button -->
                      <input type="submit" class="btn btn-primary btn-block mb-4" name="boton" value="Registrarse">
                      
                      <div class="col-md-6 d-flex justify-content-center">
                      <!-- Simple link -->
                      <a href="inicio.php">Ya tengo una cuenta</a>
                      </div>
                    
                    </form>

                  </div>

                  

                </div>
              </div>

            </div>

          </div>
        </div>
      </section>
      <!-- Section: Design Block -->











      <!-- 

//#FEDF85
//#FEB949
//#733B2F
//BLANCO  -->


















      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>

    </html>