<?php namespace App\Helpers;

/**
 * Attrib
 * 
 * Clase independiente.
 * Genera los atributos iniciales de los componentes del formulario
 * dando asi sus valores a la hora de redireccionar al mismo, en caso
 * de error, como seteandolos como vacios, en caso de ser necesarios.
 * 
 * Creada por: Gerardo Lopez
 * 
 **/

class Attrib{

  // Atributos de form#formAt
  public const formAt = [
    'enctype'       =>  'multipart/form-data'
  ];

  // Atributos de input#title
  public const title = [
    'class'       =>  'form-control',
    'id'          =>  'title',
    'name'        =>  'title',
    'placeholder' =>  'Titulo de la pelicula',
    'pattern'     =>  '^[a-zA-ZÀ-ÖØ-öø-ÿ\s]{1,120}$'
  ];

  // Atributos de input#original
  public const original = [
    'class'       =>  'form-control',
    'id'          =>  'original',
    'name'        =>  'original',
    'placeholder' =>  'Titulo Original',
    'pattern'     =>  '^[a-zA-Z\s]{1,60}$'
  ];

  // Atributos de input:file#img
  public const img = [
    'class'       =>  'form-control-file',
    'id'          =>  'img',
    'name'        =>  'img',
    'accept'      =>  'image/*'
  ];

  // Atributos de input#director
  public const director = [
    'class'       =>  'form-control',
    'id'          =>  'director',
    'name'        =>  'director',
    'placeholder' =>  'Director',
    'pattern'     =>  '^[a-zA-ZÀ-ÖØ-öø-ÿ\s]{1,80}$'
  ];

  // Atributos de input#long
  public const long = [
    'class'       =>  'form-control',
    'id'          =>  'long',
    'name'        =>  'long',
    'placeholder' =>  'Minutos',
    'pattern'     =>  '^((1\d{2})|(2[0-3]\d)|(240)|([5-9][0-9])) min$'
  ];

  // Atributos de input:textarea#desc
  public const desc = [
    'class'       =>  'form-control',
    'id'          =>  'desc',
    'name'        =>  'desc',
    'placeholder' =>  'Sinopsis de la pelicula',
  ];

  // Atributos de input:select#genero
  public const genero = [
    'class'       =>  'form-control',
    'id'          =>  'genero',
    'name'        =>  'genero'
  ];

  // Atributos de input:s#save
  public const save = [
    'class'       =>  'btn btn-primary',
    'id'          =>  'save'
  ];

  /**
   * getAttrib( string $key, string $value ): array
   * 
   * Funcion que asigna el atributo 'value' de los componentes del formulario,
   * en caso de error devuelve el valor que tenian, exceptuando los input:file,
   * que lo que almacenan es un objeto en si.
   * 
   */
  public static function getAttrib( string $key, string $value ): array{
    switch($key){
      case 'title': return array_merge(Attrib::title, ['value'=>$value]);
      case 'director': return array_merge(Attrib::director, ['value'=>$value]); 
      case 'long': return array_merge(Attrib::long, ['value'=>$value]); 
      case 'desc': return array_merge(Attrib::desc, ['value'=>$value]);
      case 'original': return array_merge(Attrib::original, ['value'=>$value]);
      default: return null;
    break;
    }
  }

}

?>