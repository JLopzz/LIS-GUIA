<!-- 

  Impresion de mensajes de error, dados por el manejador en 
  Home::processData <-> Home::manageError <-> Home::getMsg

  Hecho por: Gerardo Lopez

 -->
<div class="col-3"> 
  <?php foreach($errorMsg as $k => $e):?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= $e?>
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
  <?php endforeach; ?>
  <div class="alert alert-danger alert-dismissible fade show" role="alert">
    Debera reelegir el <strong>Archivo</strong> para subirlo.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
</div>