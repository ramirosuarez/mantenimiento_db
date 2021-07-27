<?php

namespace App\Models;

use CodeIgniter\Model;

class AreaModel extends Model
{
  protected $table      = 'area';
  protected $primaryKey = 'id';

  protected $useAutoIncrement = true;

  protected $returnType     = 'array';
  protected $useSoftDeletes = false;

  protected $allowedFields = ['nombre','apellido_paterno','apellido_materno','foto','usuario','clave','id_area','id_puesto','estado'
  ];

  protected $useTimestamps = false;


  protected $validationRules    = [];
  protected $validationMessages = [];
  protected $skipValidation     = false;
}
