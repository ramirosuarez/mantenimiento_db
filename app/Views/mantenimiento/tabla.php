<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-4 text-center text-uppercase"><?php echo $titulo ?></h1>

<div>
  <p>
    <a class="btn btn-info" href="<?php echo base_url() ?>/mantenimiento/nuevo">Agregar</a>
    <a class="btn btn-warning" href="<?php echo base_url() ?>/mantenimiento/eliminados">Eliminados</a>
  </p>
</div>
<div class="card-body">
  <table id="datatablesSimple">
    <thead>
      <tr>
        <th>Id</th>
        <th>Fecha</th>
        <th>Descripcion</th>
        <th>folio</th>
        <th>Area</th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($datos->getResultArray() as $dato) : ?>
        <tr>
          <td><?php echo $dato['id'] ?></td>
          <td><?php echo $dato['fecha'] ?></td>
          <td><?php echo $dato['descripcion'] ?></td>
          <td><?php echo $dato['folio'] ?></td>
          <td><?php echo $dato['area']?></td>
          <td>
            <a class="btn btn-warning" href="<?php echo base_url() . '/mantenimiento/editar/' .  $dato['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
          </td>
          <td><a class="btn btn-danger" href="<?php echo base_url() . '/mantenimiento/eliminar/' . $dato['id']; ?>"><i class="fas fa-trash"></i></a>
          </td>
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>