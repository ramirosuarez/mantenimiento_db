<?php

namespace App\Controllers;

use App\Models\AreaModel;
use App\Models\PuestoModel;
use App\Controllers\BaseController;

class Area extends BaseController
{

  protected $db;
  protected $area;
  public function __construct()
  {
    $this->db      = \Config\Database::connect();
    $this->area = new AreaModel();
    $this->puestos = new PuestoModel();
  }

  public function index($estado = 1)
  {
    $builder = $this->db->table('area a');
    $builder->select('a.*,p.nombre as puesto ,ar.nombre as area');
    $builder->join('puesto p ', 'p.id = a.id_puesto');
    $builder->join('area ar ', 'ar.id = a.id_area');
    $builder->where('a.estado', $estado);
    $query = $builder->get();

    $data = [
      'titulo' => 'listado de area',
      'datos' =>  $query
    ];
    return view('area/tabla', $data);
    //return json_encode($query->getResult());
  }


  public function eliminados($estado = 0)
  {
    $builder = $this->db->table('area a');
    $builder->select('a.*,p.nombre as puesto ,ar.nombre as area');
    $builder->join('puesto p ', 'p.id = a.id_puesto');
    $builder->join('area ar ', 'ar.id = a.id_area');
    $builder->where('a.estado', $estado);
    $query = $builder->get();

    $data = [
      'titulo' => 'listado de area',
      'datos' =>  $query
    ];
    return view('area/eliminados', $data);
  }

  public function nuevo()
  {
    $areas = $this->area->where('estado', 1)->findAll();
    $puestos = $this->puestos->where('estado', 1)->findAll();

    $data = [
      'titulo' => 'Alta area',
      'areas' => $areas,
      'puestos' => $puestos
    ];
    return view('area/nuevo', $data);
  }

  public function insertar()
  {
    $this->area->save([
      'nombre' => $this->request->getPost('nombre'),
      'apellido_paterno' => $this->request->getPost('apellido_paterno'),
      'apellido_materno' => $this->request->getPost('apellido_materno'),
      'foto' => $this->request->getPost('foto'),
      'usuario' => $this->request->getPost('usuario'),
      'clave' => $this->request->getPost('clave'),
      'id_area' => $this->request->getPost('id_area'),
      'id_puesto' => $this->request->getPost('id_puesto'),
      'estado' => 1
    ]);
    return redirect()->to(base_url() . '/area');
  }

  public function editar($id)
  {
    $areas = $this->area->where('estado', 1)->findAll();
    $puestos = $this->puestos->where('estado', 1)->findAll();
    $area = $this->area->where('id', $id)->first();

    $data = [
      'titulo' => 'Editar inforamcion',
      'areas' => $areas,
      'puestos' => $puestos,
      'dato' => $area
    ];
    return view('area/editar', $data);
  }

  public function actualizar()
  {
    $this->area->update($this->request->getPost('id'), [
      'nombre' => $this->request->getPost('nombre'),
      'apellido_paterno' => $this->request->getPost('apellido_paterno'),
      'apellido_materno' => $this->request->getPost('apellido_materno'),
      'foto' => $this->request->getPost('foto'),
      'usuario' => $this->request->getPost('usuario'),
      'clave' => $this->request->getPost('clave'),
      'id_area' => $this->request->getPost('id_area'),
      'id_puesto' => $this->request->getPost('id_puesto')
    ]);
    return redirect()->to(base_url() . '/area');
  }

  public function eliminar($id)
  {
    $this->area->update($id, ['estado' => 0]);
    return redirect()->to(base_url() . '/area');
  }
  public function reingresar($id)
  {
    $this->area->update($id, ['estado' => 1]);
    return redirect()->to(base_url() . '/area/eliminados');
  }
}
  //   public function index($estado = 1)
  // {
  //   $areas = $this->area->where('estado', $estado)->findAll();
  //   $data = [
  //     'titulo' => 'listado de area',
  //     'datos' => $areas
  //   ];
  //   return view('area/tabla', $data);
  // }