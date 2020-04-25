<?php
include('conexion.php');// conexion a la bd
//$sql='SELECT * FROM movies ORDER BY ID';
//$sentencia= $conexion->prepare($sql);
//$sentencia->execute();
$listPer = $conexion->query("SELECT * FROM movies");// lista los registros de la tabla
// $sentencia= $conexion->prepare($listPer);
// $sentencia->execute();

// $resultado=$sentencia->fetchAll();

// $elementosxpagina = 3;

$totalpeliculas= $listPer->rowCount();
$peliculasxpagina=3;
$paginas=0;
$paginas=$totalpeliculas/3;
// $paginas=ceil($paginas);


if(isset($_POST['insertar']))//si apretamos el boton..
{
	print_r($_FILES);
	$cargarPoster=($_FILES['poster']['tmp_name']);//carga el archivo
	$poster=fopen($cargarPoster, 'rb');//leer el archivo como binario
	$titulo=$_POST['titulo'];
	$sinopsis=$_POST['sinopsis'];
	$director=$_POST['director'];
	$genero=$_POST['genero'];

	$insertarPJ=$conexion->prepare("INSERT INTO movies(poster, titulo, sinopsis, director, genero) VALUES(:poster, :titulo, :sinopsis, :director, :genero)");
	$insertarPJ->bindParam(':poster', $poster, PDO::PARAM_LOB);
	$insertarPJ->bindParam(':titulo', $titulo, PDO::PARAM_STR);
	$insertarPJ->bindParam(':sinopsis', $sinopsis, PDO::PARAM_STR);
	$insertarPJ->bindParam(':director', $director, PDO::PARAM_STR);
	$insertarPJ->bindParam(':genero', $genero, PDO::PARAM_STR);
	$insertarPJ->execute();

	if($insertarPJ)//si la query se ejecuta con exito lanza el mensaje:
	{
		
		$mensaje="<div class='col-md-offset-4 col-md-4 alert alert-success text-center'>
		¡PELÍCULA AÑADIDA EXITOSAMENTE! <a href='index.php'>VER AQUÍ</a></div>";
	}

	else //pero si no se ejecuta correctamente, lanza el mensaje:
	{
		$mensaje="<div class='col-md-offset-4 col-md-4 alert alert-danger text-center'>
		¡LA PELÍCULA NO PUDO AGREGARSE!</div>";
	}
}
?>

<html lang="es">
	<head> 
		<title>CARTELERA</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/estilos.css">
	</head>
	<body>
		<header>
			<div class="alert alert-info">
			<h3>Cartelera CINE+</h3>
			</div>
		</header>

		<?php
		
		if(!$_GET){
			header('Location:index.php?pagina=1');
		}

		$iniciar = ($_GET['pagina']-1)*$peliculasxpagina;
		echo $iniciar;	

		$sql_peliculas = 'SELECT * FROM movies LIMIT :iniciar,:npeliculas';
		$sentencia_pelis = $conexion->prepare($sql_peliculas);
		$sentencia_pelis->bindParam(':iniciar',$iniciar,PDO::PARAM_INT);
		$sentencia_pelis->bindParam(':npeliculas',$peliculasxpagina,PDO::PARAM_INT);
		$sentencia_pelis->execute();

		$resultado_pelis=$sentencia_pelis->fetchAll();
		
		?>
		
		<section>
		<? echo $mensaje; ?>
			<table class="table">
				<tr class="bg-primary">
				<th>ID</th>
				<th>POSTER</th>
				<th>TÍTULO</th>
				<th>SINÓPSIS</th>
				<th>DIRECTOR</th>
				<th>GÉNERO</th>	
				</tr>
				<?php foreach($resultado_pelis as $peliculas):?>

					<div class="alert alert-primary" role="alert">
						<?php echo '<tr>
						<td>'.$peliculas['ID'].'</td>
						<td><img src="data:image/png;base64, '.base64_encode($peliculas['poster']).'" width="200" height="300"></td>
						<td>'.$peliculas['titulo'].'</td>
						<td>'.$peliculas['sinopsis'].'</td>
						<td>'.$peliculas['director'].'</td>
						<td>'.$peliculas['genero'].'</td>
					 	 </tr>' ?>
					</div>

					<!-- // while ($perFila=$resultado_pelis->fetch(PDO::FETCH_ASSOC))
					// {
					// echo '<tr>
					// 		<td>'.$perFila['ID'].'</td>
					// 		<td><img src="data:image/png;base64, '.base64_encode($perFila['poster']).'"></td>
					// 		<td>'.$perFila['titulo'].'</td>
					// 		<td>'.$perFila['sinopsis'].'</td>
					// 		<td>'.$perFila['director'].'</td>
					// 		<td>'.$perFila['genero'].'</td>
					// 	 </tr>';
					// } -->

				<?php endforeach ?>	
				
			</table>

			<nav aria-label="Page navigation example">
			<ul class="pagination">
				<li class="page-item<?php echo 'index.php?pagina='.$_GET['pagina']-1 ?>">
				<a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']-1 ?>">
				Previous
				</a>
				</li>
				<?php  for($i=0 ; $i<$paginas  ;$i++): ?>

				<li class="page-item <?php echo $_GET['pagina']==$i+1 ? 'active':'' ?>">
				<a class="page-link" href="index.php?pagina=<?php echo $i+1 ?>">

				<?php  echo $i+1 ?>
				</a></li>
				<?php  endfor ?>

				<li class="page-item<?php echo $_GET['pagina']>=$paginas? 'disabled':'' ?>">
				<a class="page-link" href="index.php?pagina=<?php echo $_GET['pagina']+1 ?>">Next</a></li>
			</ul>
			</nav>

			<form method="POST" enctype="multipart/form-data">
				<table class="table">
				<tr><th colspan="6" class="bg-primary text-center" >NUEVA PELÍCULA</th></tr>
				<tr class="bg-primary">
				<th>POSTER</th>
				<th>TÍTULO</th>
				<th>SINÓPSIS</th>
				<th>DIRECTOR</th>
				<th>GÉNERO</th>
				</tr>
				<tr class="bg-info">
				<td><input name="poster" type="file" class="form-control"></td>
				<td><input name="titulo" type="text" class="form-control" placeholder="Título"></td>
				<td><input name="sinopsis" type="text" class="form-control" placeholder="Sinópsis"></td>
				<td><input name="director" type="text" class="form-control" placeholder="Director"></td>
				<td><input name="genero" type="text" class="form-control" placeholder="Género"></td>
				<td><input name="insertar" type="submit" class="btn btn-success" value="Insertar Película" > </td>
				</tr>
				</table>
				<br>
				<br>
				
			</form>
		</section>
</body>
</html>
