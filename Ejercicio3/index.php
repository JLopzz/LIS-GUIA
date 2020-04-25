<!DOCTYPE html>
	<html lang="es">
		<head>
			<meta http-equiv = "Content-type" content = "text/html; charset=utf-8" />
			<title>Lenguajes de Programación</title>

			<script src = "js/ahahLib.js" ></script>
			<script src = "js/activetab.js" ></script>
			<link rel = "stylesheet" href = "https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity = "sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin = "anonymous" >
		</head>

		<body class="container">
			<section>
				<article>
					<ul id="tabmenu" class="nav nav-tabs">
						<li id="t1" class="nav-item" onclick="makeactive(1)">
							<a class="nav-link active" id="tab1">PHP</a>
						</li>

						<li id="t2" class="nav-item" onclick="makeactive(2)">
							<a class="nav-link" id="tab2">JAVA</a>
						</li>

						<li id="t3" class="nav-item" onclick="makeactive(3)">
							<a class="nav-link" id="tab3">C#</a>
						</li>
					</ul>
					<div id="content">
						(Aquí se mostrará el contenido de cada pestaña)
					</div>
				</article>
			</section>
		</body>
	</html>