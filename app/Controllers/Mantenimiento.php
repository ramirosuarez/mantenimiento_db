<?php
namespace App\Controllers;
use App\Models\AreaModel;
use App\Models\MantenimientoModel;
use App\Controllers\BaseController;

class Mantenimiento extends BaseController
{

    protected $mantenimiento;
    protected $db;
    public function __construct()
    {
        $this->area = new AreaModel();
        $this->mantenimiento = new MantenimientoModel();
        $this->db      = \Config\Database::connect();
    }
    public function index($estado = 1)
    {
      $builder = $this->db->table('mantenimiento m');
      $builder->select('m.*,a.nombre as area ');
      $builder->join('area a ', 'a.id = m.id_area');
      $builder->where('m.estado', $estado);
      $query = $builder->get();
  
      $data = [
        'titulo' => 'Mantenimientos activos',
        'datos' =>  $query
      ];
     return view('mantenimiento/tabla', $data);
    //   return json_encode($query->getResult());
    }
    public function eliminados($estado = 0)
  {
    $builder = $this->db->table('mantenimiento m');
      $builder->select('m.*,a.nombre as area ');
      $builder->join('area a ', 'a.id = m.id_area');
      $builder->where('m.estado', $estado);
      $query = $builder->get();

    $data = [
      'titulo' => 'Mantenimientos realizados',
      'datos' =>  $query
    ];
    return view('mantenimiento/eliminados', $data);
  }

  public function nuevo()
  {
    $areas = $this->area->where('estado', 1)->findAll();
   
    $data = [
      'titulo' => 'Alta registro',
      'areas' => $areas
    ];
    return view('mantenimiento/nuevo', $data);
  }
  public function eliminar($id)
  {
    $this->mantenimiento->update($id, ['estado' => 0]);
    return redirect()->to(base_url() . '/mantenimiento');
  }
  public function reingresar($id)
  {
    $this->mantenimiento->update($id, ['estado' => 1]);
    return redirect()->to(base_url() . '/mantenimiento/eliminados');
  }

}   