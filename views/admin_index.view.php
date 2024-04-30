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
        Panel de Administracion
      </h3>
      <?php foreach($posts as $post)  : ?>
       <article class="blog-post">
        <div class="col-md-12">
            <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-success-emphasis">Design</strong>
                <h3 class="mb-0"><?php echo $post['id'] . '. - ' .$post['titulo'];  ?></h3>
                <div class="mb-1 text-body-secondary"><?php echo $post['fecha']  ?></div>
                <p class="mb-auto"><?php echo $post['extracto']  ?></p>
                <div class="d-flex mt-2">
                            <a href="#" class="me-2 btn btn-secondary"><i class="fas fa-edit"></i> Editar</a>
                            <a href="#" class="me-2 btn btn-secondary""><i <i class="fa fa-folder-open" ></i> Ver</a>
                            <a href="#" class="me-2 btn btn-secondary""><i class="fa fa-trash"></i>  Borrar</a>
                    </div>
                </div>
                <div class="col-auto d-lg-block">
                    <img src="../img/<?php echo $post['thumb']  ?>" class="bd-placeholder-img" width="250" height="100%" aria-label="Imagen" alt="Imagen">
                </div>
            </div>
        </div>
       </article>
      <?php endforeach; ?>
        <?php require '../paginacion.php'; ?>

</main>

<?php require '../views/footer.php' ?>
</body>

</html>