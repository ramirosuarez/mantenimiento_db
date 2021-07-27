<?php

  namespace App\Controllers;

  use App\Controllers\BaseController;
  use App\Models\AreaModel;

class Area extends BaseController{
    protected $area;
    public function __construct()
    {
      $this->area = new AreaModel();
    }
    public function index($estado = 1)
  {
    $areas = $this->area->where('estado', $estado)->findAll();
    $data = [
      'titulo' => 'listado de area',
      'datos' => $areas
    ];
    return view('area/tabla', $data);
  }

  public function eliminados($estado = 0)
  {
    $areas = $this->area->where('estado', $estado)->findAll();
    $data = [
      'titulo' => 'listado de area',
      'datos' => $areas
    ];
    return view('area/eliminados', $data);
  }

  public function nuevo()
  {
    $data = ['titulo' => 'Alta area'];
    return view('area/nuevo', $data);
  }

  public function insertar()
  {
    $this->area->save([
      'nombre' => $this->request->getPost('nombre'),
      'apellido_paterno' => $this->request->getPost('apellido_paterno'),
      'apellido_materno' => $this->request->getPost('apellido_materno'),
      'tipo' => $this->request->getPost('tipo'),
      'otro' => $this->request->getPost('otro'),
      'desc_area' => $this->request->getPost('desc_area'),
      'especifique' => $this->request->getPost('especifique'),
      'estado' => 1
    ]);
    return redirect()->to(base_url() . '/area');
  }

  public function editar($id)
  {
    $areas = $this->area->where('id', $id)->first();
    $data = ['titulo' => 'Editar inforamcion', 'dato' => $areas];
    return view('area/editar', $data);
  }

  public function actualizar()
  {
    $this->area->update($this->request->getPost('id'), [
      'nombre' => $this->request->getPost('nombre'),
      'apellido_paterno' => $this->request->getPost('apellido_paterno'),
      'apellido_materno' => $this->request->getPost('apellido_materno'),
      'tipo' => $this->request->getPost('tipo'),
      'otro' => $this->request->getPost('otro'),
      'desc_area' => $this->request->getPost('desc_area'),
      'especifique' => $this->request->getPost('especifique'),
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