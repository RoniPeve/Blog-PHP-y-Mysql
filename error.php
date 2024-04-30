<?php

require 'admin/config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/bootstrap.min.css">
    <script src="<?php echo RUTA; ?>js/bootstrap.bundle.min.js"></script>
    <title>Error</title>
</head>
<?php require 'views/menu.php'?>;
<body>
<div class="px-4 py-5 my-2 text-center">
    <img class="d-block mx-auto mb-4" src="img/ErrorMessage.png" alt="" width="100" height="100">
    <h1 class="display-5 fw-bold text-body-emphasis">Error</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Lo sentimos, la página que estás buscando no pudo ser encontrada. Por favor, verifica la URL o intenta regresar a la página de inicio.</p>
      <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
      <a href="<?php echo RUTA; ?>" class="btn btn-primary btn-lg px-4 gap-3">Volver al Inicio</a>
        
      </div>
    </div>
  </div>
</body>
<?php require 'views/footer.php' ?>



