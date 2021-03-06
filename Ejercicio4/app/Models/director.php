<?php namespace App\Models;

/**
 * Director
 * 
 * Clase extiende de Model
 * Nos devuelve las funciones para trabajo con la base de datos,
 * y funciones de CRUD para la tabla director de la base de datos
 */

use CodeIgniter\Model;

class Director extends Model
{
  //Tabla con la que se trabajara
  protected $table      = 'director';

  //Llave primaria de la tabla seleccionada
  protected $primaryKey = 'iddirector';

  /*
   * Manera en que se devuelven los datos
   * Puede devolver array u objeto
   */
  protected $returnType = 'array';

  //Borrado para el aplicativo o para la base de datos
  protected $useSoftDeletes = false;

  //Campos de la tabla con los que se podra insertar
  protected $allowedFields = ['nombre','nacionalidad'];

  /**
   * funciones extras que no se ocupan
   * sobre almacenamiento de fechas en la tabla:
   *  -Fecha de Creacion
   *  -Fecha de Actualizacion
   *  -Fecha de Eliminacion
   */
  protected $useTimestamps = false;
  protected $createdField  = '';
  protected $updatedField  = '';
  protected $deletedField  = '';

  /**
   * Funciones de validacion en aplicativo
   *  -Reglas de Validacion por campo de la Tabla
   *  -Mensajes que apareceran al no cumplirse las reglas de Validacion
   *  -Saltar/ignorar validacion
   */
  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}