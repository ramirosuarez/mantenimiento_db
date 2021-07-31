<?php

namespace App\Models;

use CodeIgniter\Model;

class MantenimientoModel extends Model
{
    protected $table      = 'mantenimiento';
    protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = true;

    protected $allowedFields = ['fecha','descripcion','folio','id_area','estado'];

    protected $useTimestamps = false;
    

    protected $validationRules    = [];
    protected $validationMessages = [];
    protected $skipValidation     = false;
}