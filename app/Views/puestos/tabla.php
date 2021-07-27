<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-4 text-center text-uppercase"><?php echo $titulo ?></h1>

<div>
  <p>
    <a class="btn btn-info" href="<?php echo base_url() ?>/puesto/nuevo">Agregar</a>
    <a class="btn btn-warning" href="<?php echo base_url() ?>/puesto/eliminados">Eliminados</a>
  </p>
</div>
<div class="card-body">
  <table id="datatablesSimple">
    <thead>
      <tr>
        <th>Id</th>
        <th>nombre</th>
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
          <td><?php echo $dato['descripcion'] ?></td>
          <td><?php echo $dato['especifique'] ?></td>
          <td>
            <a class="btn btn-warning" href="<?php echo base_url() . '/puesto/editar/' . $dato['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
          </td>
          <td><a class="btn btn-danger" href="<?php echo base_url() . '/puesto/eliminar/' . $dato['id']; ?>"><i class="fas fa-trash"></i></a>
        </td>
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>