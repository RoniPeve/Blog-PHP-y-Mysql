<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/bootstrap.min.css">
    <script src="<?php echo RUTA; ?>js/bootstrap.bundle.min.js"></script>
    <title>Login</title>
</head>
 <?php require 'views/menu.php'?>

<body>
<section class="h-100 gradient-form mt-0" style="background-color: #eee;">
  <div class="container py-4 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-xl-10">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="card-body p-md-2 mx-md-4">

                <div class="text-center">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-2 pb-1">Bienvenidos</h4>
                </div>

                <form>
                  <p>Ingrese sus datos para iniciar sesion</p>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="email" id="form2Example11" class="form-control"
                      placeholder="Usuario" />
                  </div>

                  <div data-mdb-input-init class="form-outline mb-4">
                    <input type="password" id="form2Example22" class="form-control" placeholder="Contraseña" />
                    
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="button">
                        Iniciar Sesion</button>
                
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4 ">
                    <p class="mb-0 me-2">¿Aún no tiene cuenta?</p>
                    <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-danger">Crear Cuenta</button>
                  </div>

                </form>

              </div>
            </div>
            <div class="col-lg-6 d-flex align-items-center gradient-custom-2 d-none d-lg-block">
                <img src="img/1.jpg" class="bd-placeholder-img" width="100%" height="100%" aria-label="Imagen" alt="Imagen">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
</body>
<?php require 'views/footer.php' ?>