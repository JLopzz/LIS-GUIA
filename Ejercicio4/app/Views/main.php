<!-- 

  Pagina principal.

  Muestra en una tabla las peliculas que ya existen en la base de datos, 
  con su respectivo poster, descripcion, duracion, etc.

  Recibe la informacion del Home::index -> model\Pelicula como array, 
  por lo que se recorre, facilitando la creacion de la tabla.

  Creado por: Gerardo Lopez
 -->
<?php use App\Helpers\DBWork;?>
<?= view('Header',['title'=>'Pagina Principal'])?>
<body>
  <ul class="nav justify-content-around nav-tabs pt-4 bg-dark">
    <li class="nav-item">
      <a class="nav-link active" href='<?= base_url()?>'><h4>Ver todas las peliculas</h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link text-light" href='<?= base_url()?>/new'><h4>Agregar nueva pelicula</h4></a>
    </li>
  </ul>
  <div class="row">
    <div class='col-md-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2'>
      <h1 class='text-center my-4'>Peliculas en la Base de Datos</h1>
      <table class="table table-striped">
      <thead class='thead-dark'>
        <tr>
          <th scope="col">Poster</th>
          <th scope="col">Titulo</th>
          <th scope="col">Duracion</th>
          <th scope="col">Genero</th>
          <th scope="col">Director</th>
          <th scope="col">Descripcion</th>
        </tr>
      </thead>
      <tbody>
      <?php foreach($pelicula as $k => $p): ?>
        <tr>
          <td class='align-middle'><img class="img-fluid" src="../writable/<?=$p['imgpelicula']?>" alt="<?= $p['titulopelicula'] ?>"></td>
          <th class='align-middle'><?= $p['titulopelicula'] ?></th>
          <td class='align-middle'><?= $p['duracion'] ?></td>
          <td class='align-middle'><?= DBWork::getGen($p['idgenero']) ?></td>
          <td class='align-middle'><?= DBWork::getNameDir($p['iddirector']) ?></td>
          <td class="text-justify align-middle"><?= $p['descripcion'] ?></td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
    </div>
  </div>
</body>
</html>