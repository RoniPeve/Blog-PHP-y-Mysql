<nav aria-label="Page navigation example">
  <?php $numero_paginas = numero_paginas($blog_config['post_por_pagina'], $conexion);?>
  <ul class="pagination">
    <?php if(pagina_Actual() === 1) : ?>
      <li class="page-item"><a class="page-link disabled">Anterior</a></li>
    <?php else: ?>
      <li class="page-item"><a class="page-link" href="index.php?p=<?php echo pagina_Actual()-1 ?>">Anterior</a></li>
    <?php endif; ?>

    <?php for($i=1;$i<=$numero_paginas;$i++) : ?>
        <?php if(pagina_Actual()===$i) :?>
          <li class="page-item active"><a class="page-link"><?php echo $i; ?></a></li>
        <?php else: ?>
            <li class="page-item"><a class="page-link" href="index.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
        <?php endif; ?>  
    <?php endfor; ?>
    <?php if(pagina_Actual()==$numero_paginas):?>
      <li class="page-item disabled"><a class="page-link">Siguiente</a></li>
    <?php else:?>
      <li class="page-item"><a class="page-link" href="index.php?p=<?php echo pagina_Actual()+1;?>">Siguiente</a></li>
    <?php endif; ?>

  </ul>
</nav>