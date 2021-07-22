<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>
<h1 class="mt-4 text-center text-uppercase"><?php echo $titulo ?></h1>

<div>
  <p>
   
    <a class="btn btn-warning" href="<?php echo base_url() ?>/puesto">Puestos Activos</a>
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
            <a  href="<?php echo base_url() . '/puesto/reingresar/' . $dato['id']; ?>"><i class="fas fa-arrow-alt-circle-up"></i></a>
          </td>
          
        </tr>
      <?php endforeach ?>

    </tbody>
  </table>
</div>
<?= $this->endSection(); ?>