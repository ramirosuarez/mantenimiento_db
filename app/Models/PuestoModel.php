<?php

namespace App\Models;

use CodeIgniter\Model;

class PuestoModel extends Model
{
    protected $table      = 'puesto';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['nombre', 'descripcion','especifique','estado'];

    protected $useTimestamps = false;
    

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}