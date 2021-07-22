<?php

namespace App\Models;

use CodeIgniter\Model;

class PersonalModel extends Model
{
  protected $table      = 'personal';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['nombre', 'apellido_paterno', 'apellido_materno', 'tipo', 'otro', 'desc_personal', 'especifique', 'estado'];

  protected $useTimestamps = false;


  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}
