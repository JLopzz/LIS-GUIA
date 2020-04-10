<?php namespace App\Models;

use CodeIgniter\Model;

class Director extends Model
{
  protected $table      = 'director';
  protected $primaryKey = 'iddirector';

  protected $returnType = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['nombre', 'iddirector', 'nacionalidad'];

  protected $useTimestamps = false;
  protected $createdField  = '';
  protected $updatedField  = '';
  protected $deletedField  = '';

  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}