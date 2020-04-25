<!-- 

  Formulario de Creacion de pelicula, se ingresam los datos del titulo, titulo original, director,
  duracion, Sinopsis y el genero de la pelicula que se ingresa.

  Ocupa las clases independientes 'App\Helpers\Attrib' y 'App\Helpers\DBWork' para mostrar la informacion
  de manera ordenada.

  Ocupa los <style/> y <script/> propios de Bootstrap. 

  manda a llamar a las funciones propias de CodeIgniter form_open(), form_close(), etc para la impresion del fomulario.
  Eg.:
        1.  <?//= form_open('./accion.php',[ 'atributo' => 'valores_de_atributos' ]);?>
        2.  <?//= from_close()?>
        (...)
    
  Creado por: Gerardo Lopez

 -->
<?php
  use App\Helpers\Attrib;
  use App\Helpers\DBWork;
  echo view('Header',['title'=>'Nueva Pelicula']);
?>
<body>
  <ul class="nav justify-content-around nav-tabs pt-4 bg-dark">
    <li class="nav-item">
      <a class="nav-link text-light" href='<?= base_url()?>'><h4>Ver todas las peliculas</h4></a>
    </li>
    <li class="nav-item">
      <a class="nav-link active" href='<?= base_url()?>/new'><h4>Agregar nueva pelicula</h4></a>
    </li>
  </ul>
  <div class="row">
    <div class="col row">
      <div class='col-sm-12 col-md-10 offset-md-1'>
        <h1 class="text-center my-4">Ingresar nueva pelicula</h1>
        <?=form_open('Home/processData',Attrib::formAt);?>
        <div class="form-row">
          <div class="form-group col-md-6">
            <?=form_label('Titulo de Pelicula','title')?>
            <?=form_input(Attrib::getAttrib('title',$values['title']))?>
          </div>
          <div class="form-group col-md-6">
            <?=form_label('Titulo Original de Pelicula','original')?>
            <?=form_input(Attrib::getAttrib('original',$values['original']))?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-3">
            <?=form_label('Director de la Pelicula','director')?>
            <?=form_input(Attrib::getAttrib('director',$values['director']))?>
          </div>
          <div class="form-group col-md-3">
            <?=form_label('Duracion de Pelicula','long')?>
            <?=form_input(Attrib::getAttrib('long',$values['long']))?>
          </div>
          <div class="form-group col-md-3">
            <?=form_label('Imagen de la Pelicula','img')?>
            <?=form_upload(Attrib::img)?>
          </div>
          <div class="form-group col-md-3">
            <?=form_label('Genero de la Pelicula','genero')?>
            <?=form_dropdown('genero',DBWork::getArrayGen(),$values['genero'],Attrib::genero)?>
          </div>
        </div>
        <div class="form-group">
          <?=form_label('Descricion de la Pelicula','desc')?>
          <?=form_textarea(Attrib::getAttrib('desc',$values['desc']))?>
        </div>
        <?=form_submit('save','Guardar',Attrib::save)?>
      </div>
    </div>
    <?= $errors['error']? view('Error',$errors):''?>
  </div>
</body>
</html>