<?php namespace App\Helpers;

use App\Models\Director;
use App\Models\Genero;

class Match{  

  protected function getInfoDir($id=''){
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
  
  public function getNameDir($id = ''){
    $data = $this->getInfoDir($id);
    return $data['nombre'];
  }
  
  public function getNaciDir($id = ''){
    $data = $this->getInfoDir($id);
    return $data['nacionalidad'];
  }

  public function getGen($id = ''){
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
  
}