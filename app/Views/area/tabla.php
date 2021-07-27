<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-4 text-center text-uppercase"><?php echo $titulo ?></h1>

<div>
  <p>
    <a class="btn btn-info" href="<?php echo base_url() ?>/area/nuevo">Agregar</a>
    <a class="btn btn-warning" href="<?php echo base_url() ?>/area/eliminados">Eliminados</a>
  </p>
</div>
<div class="card-body">
  <table id="datatablesSimple">
    <thead>
      <tr>
      
        
        <th>Id</th>
        <th>nombre</th>
        <th>Apellido Paterno</th>
        <th>Apellido Materno</th>
        <th>Foto</th>
        <th>Usuario</th>
        <th>Clave</th>
        <th>Area</th>
        <th>Puesto</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datos as $dato) : ?>
        <tr>
        <td><?php echo $dato['id'] ?></td>
          <td><?php echo $dato['nombre'] ?></td>
          <td><?php echo $dato['apellido_paterno'] ?></td>
          <td><?php echo $dato['apellido_materno'] ?></td>
          <td><?php echo $dato['foto'] ?></td>
          <td><?php echo $dato['usuario'] ?></td>
          <td><?php echo $dato['clave'] ?></td>
          <td><?php echo $dato['id_area'] ?></td>
          <td><?php echo $dato['id_puesto'] ?></td>
         
          <td>
            <a class="btn btn-warning" href="<?php echo base_url() . '/area/editar/' . $dato['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
          </td>
          <td><a class="btn btn-danger" href="<?php echo base_url() . '/area/eliminar/' . $dato['id']; ?>"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>