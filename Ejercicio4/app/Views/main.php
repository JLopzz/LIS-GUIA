<?php 
  use App\Helpers\Match;
  $match = new Match;
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <h1>Main Page</h1>
  <table class="table">
  <thead>
    <tr>
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
      <th><?= $p['titulopelicula'] ?></th>
      <td><?= $p['duracion'] ?></td>
      <td><?= $match->getGen($p['idgenero']) ?></td>
      <td><?= $match->getNameDir($p['iddirector']) ?></td>
      <td><?= $p['descripcion'] ?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>
</body>
</html>