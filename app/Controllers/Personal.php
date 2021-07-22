<?php
  namespace App\Controllers;

  use App\Controllers\BaseController;
use App\Models\PersonalModel;

class Personal extends BaseController{
    protected $personal;

    public function __construct()
    {
      $this->personal = new PersonalModel();
    }

    public function index($estado = 1){
      $personals = $this->personal->where('estado',$estado)->findAll();
      $data= [
        'titulo'=> 'listado de personal',
        'datos' => $personals
      ];
      return view('personal/tablaPersonal',$data);
    }

    public function nuevo(){
      $data = ['titulo' => 'Alta Personal'];
      return view('personal/nuevo',$data);
    }

    public function insertar(){
      $this->personal->save([
        'nombre' => $this->request->getPost('nombre'),
        'apellido_paterno' => $this->request->getPost('apellido_paterno'),
        'apellido_materno' => $this->request->getPost('apellido_materno'),
        'tipo' => $this->request->getPost('tipo'),
        'otro' => $this->request->getPost('otro'),
        'desc_personal' => $this->request->getPost('desc_personal'),
        'especifique' => $this->request->getPost('especifique'),
      ]);
      return redirect()->to(base_url().'/personal');
    }

    public function editar($id){
      $personals = $this->personal->where('id',$id)->first();
      $data = ['titulo' => 'Editar inforamcion','dato' => $personals];
      return view('personal/editar',$data);
    }

    public function actualizar(){
      $this->personal->update($this->request->getPost('id'),[
        'nombre' => $this->request->getPost('nombre'),
        'apellido_paterno' => $this->request->getPost('apellido_paterno'),
        'apellido_materno' => $this->request->getPost('apellido_materno'),
        'tipo' => $this->request->getPost('tipo'),
        'otro' => $this->request->getPost('otro'),
        'desc_personal' => $this->request->getPost('desc_personal'),
        'especifique' => $this->request->getPost('especifique'),
      ]);
      return redirect()->to(base_url().'/personal');
    }

    public function eliminar(){
      $this->personal->update($this->request->getPost('id'),['estado'=> 0]);
      return redirect()->to(base_url().'/personal');
    }
  } 