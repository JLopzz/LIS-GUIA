<?php namespace App\Models;

use CodeIgniter\Model;

class Genero extends Model
{
  protected $table      = 'genero';
  protected $primaryKey = 'ididgenero';

  protected $returnType = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['generopelicula'];

  protected $useTimestamps = false;
  protected $createdField  = '';
  protected $updatedField  = '';
  protected $deletedField  = '';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}