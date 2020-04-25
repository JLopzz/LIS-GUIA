<?php namespace App\Helpers;
/**
 * DBWork: Clase independiente, derivada para el trabajo de los CodeIgniter\Model.
 * 
 * Contiene funciones que devuelven valores extraidos de las tablas relacionadas
 * a la principal.
 * 
 * Creada por: Gerardo Lopez
 * 
 **/

use App\Models\Director;
use App\Models\Genero;

class DBWork{
  /**Funcion que obtiene la informacion completa de la tabla Director,
   * devuelve un arreglo del director con el Id dado**/
  protected static function getInfoDir($id): array{
    $dir = new Director();
    $dataDir = $dir->find();
    foreach($dataDir as $d){
      if($d['iddirector']==$id){
        $data = $d;
      break;
      }
      else $data=[
        'nombre' => 'No Especificado',
        'nacionalidad' => 'No Especificado'
      ]; 
    }
    return $data;
  }

  /**funcion para comparacion o insercion de un director en tabla Director
   * Devuelde el id del director **/ 
  public function compDir(string $d): int{
    $dir = new Director();
    $dDirec = $dir->find();
    foreach($dDirec as $di){
      if($di['nombre'] == $d){
        $res = $di['iddirector'];
      break;
      }
    }
    if(!isset($res)){
      $data=[
        'nombre' => $d,
        'nacionalidad' => 'No Especificado'
      ]; 
      if(!$dir->insert($data)) return view('errors/cli/error_exception');
      else{
        return $this->compDir($d);}
    }
    else return $res;
  }

  /**Obtiene el Nombre del director dado el ID **/
  public static function getNameDir($id = ''){
    $data = DBWork::getInfoDir($id);
    return $data['nombre'];
  }
  
  /**Obtiene el Nombre del director dado el ID **/
  public static function getNaciDir($id = ''): string{
    $data = DBWork::getInfoDir($id);
    return $data['nacionalidad'];
  }

  /**Obtiene el genero de la pelicula, dado el ID **/
  public static function getGen($id = ''): string{
    $gen = new Genero();
    $dataGen = $gen->find();
    foreach($dataGen as $d){
      if($d['idgenero']==$id){
        $data = $d['generopelicula'];
      break;
      }
      else $data='No Especificado'; 
    }
    return $data;
  }
  /**Convierte los datos obtenidos de tabla Genero en un 
   * Array asociativo de [ID] => [Genero] **/
  public static function getArrayGen(): array{
    $gen = new Genero();
    $dataGen = $gen->find();
    $k=[];
    $v=[];
    foreach($dataGen as $d){
      array_push($k,$d['idgenero']);
      array_push($v,$d['generopelicula']);
    }
    $data = array_combine($k,$v);
    return $data;
  }

}