<?php namespace App\Models;

use CodeIgniter\Model;

class Pelicula extends Model
{
  protected $table      = 'pelicula';
  protected $primaryKey = 'idpelicula';

  protected $returnType = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = [
    'titulopelicula', 'descripcion', 'imgpelicula',
    'titulooriginal', 'duracion', 'idgenero',
    'iddirector'
  ];

  protected $useTimestamps = false;
  protected $createdField  = '';
  protected $updatedField  = '';
  protected $deletedField  = '';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}