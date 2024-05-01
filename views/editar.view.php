<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/estilos.css">
    <link rel="stylesheet" href="<?php echo RUTA; ?>css/bootstrap.min.css">
    <script src="<?php echo RUTA; ?>js/bootstrap.bundle.min.js"></script>
    <title>Blog</title>
</head>
<?php require '../views/menu.php'?>;
<body>
<main class="container mt-2">
      <h3 class="pb-4 mb-4 fst-italic border-bottom">
        Editar Articulo
      </h3>
      <div class="card  mb-4">
        <div class="card-body">
        <form  method="POST" enctype="multipart/form-data"  action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input name="titulo" type="text" class="form-control" id="titulo" placeholder="Ingrese el titulo">
                
            </div>
            <div class="mb-3">
                <label for="extracto" class="form-label">Descripcion Corta</label>
                <input name="extracto" type="text" class="form-control" id="extracto" placeholder="Ingrese la descripcion corta">
                
            </div>
            <label for="texto" class="form-label">Descripcion</label>
            <div class="form-floating">
            <textarea class="form-control" name="texto" id="floatingTextarea2" style="height: 200px"></textarea>
            <label for="floatingTextarea2">Descripcion</label>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Sube la imagen del Articulo</label>
                <input name="thumb" type="file" class="form-control" id="thumb">
                
            </div>
            <button type="submit" class="btn btn-primary mt-4">Submit</button>
            </form>
        </div>
      </div>
</main>

<?php require '../views/footer.php' ?>
</body>

</html>