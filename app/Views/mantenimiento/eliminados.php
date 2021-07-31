<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-4 text-center text-uppercase"><?php echo $titulo ?></h1>

<div>
  <p>
    <a class="btn btn-info" href="<?php echo base_url() ?>/mantenimiento">Activos</a>

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
        <th>jefe Area</th>
        <th>Puesto</th>
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
            <a class="btn btn-warning" href="<?php echo base_url() . '/mantenimiento/reingresar/' . $dato['id']; ?>"><i class="fas fa-pencil-alt"></i></a>
          </td>

        </tr>
      <?php endforeach ?>


    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>