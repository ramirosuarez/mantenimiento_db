<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\PuestoModel;


class Puesto extends BaseController
{
  protected $puestos;

  public function __construct()
  {
    $this->puestos = new PuestoModel();
  }

  public function index($estado = 1)
  {
    $puestos = $this->puestos->where('estado', $estado)->findAll();
    $data = [
      'titulo'  =>  'listado de departamentos',
      'datos' =>  $puestos
    ];

    return view('puestos/puestos', $data);
  }

  public function eliminados($estado = 0)
  {
    $puestos = $this->puestos->where('estado', $estado)->findAll();
    $data = [
      'titulo'  =>  'listado de departamentos Eliminados',
      'datos' =>  $puestos
    ];

    return view('puestos/eliminados', $data);
  }

  public function nuevo()
  {
    $data = ['titulo'  =>  'Alta Puesto'];
    return view('puestos/nuevo', $data);
  }

  public function insertar()
  {
    $this->puestos->save([
      'nombre'  =>  $this->request->getPost('nombre'),
      'descripcion'  =>  $this->request->getPost('descripcion'),
      'especifique'  =>  $this->request->getPost('especifique')
    ]);
    return redirect()->to(base_url() . '/puesto');
  }

  public function editar($id)
  {
    $puesto = $this->puestos->where('id', $id)->first();
    $data = ['titulo'  =>  'Editar Puesto', 'dato' => $puesto];
    return view('puestos/editar', $data);
  }

  public function actualizar()
  {
    $this->puestos->update($this->request->getPost('id'), [
      'nombre'  =>  $this->request->getPost('nombre'),
      'descripcion'  =>  $this->request->getPost('descripcion'),
      'especifique'  =>  $this->request->getPost('especifique')
    ]);
    return redirect()->to(base_url() . '/puesto');
  }

  public function eliminar($id)
  {
    $this->puestos->update($id, ['estado'  =>  0]);
    return redirect()->to(base_url() . '/puesto');
  }
  public function reingresar($id)
  {
    $this->puestos->update($id, ['estado'  =>  1]);
    return redirect()->to(base_url() . '/puesto');
  }
}
