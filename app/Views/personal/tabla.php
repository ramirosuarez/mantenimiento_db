<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-4 text-center text-uppercase"><?php echo $titulo ?></h1>

<div>
  <p>
    <a class="btn btn-info" href="<?php echo base_url() ?>/personal/nuevo">Agregar</a>
    <a class="btn btn-warning" href="<?php echo base_url() ?>/personal/eliminados">Eliminados</a>
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
        <th>Tipo</th>
        <th>Otro</th>
        <th>Descripcion</th>
        <th>Especifique</th>
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
          <td><?php echo $dato['tipo'] ?></td>
          <td><?php echo $dato['otro'] ?></td>
          <td><?php echo $dato['desc_personal'] ?></td>
          <td><?php echo $dato['especifique'] ?></td>
          <td>
            <a class="btn btn-warning" href="<?php echo base_url() . '/personal/editar/' . $dato['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
          </td>
          <td><a class="btn btn-danger" href="<?php echo base_url() . '/personal/eliminar/' . $dato['id']; ?>"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>