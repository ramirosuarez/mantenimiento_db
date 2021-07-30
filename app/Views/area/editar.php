<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>

<h1 class='text-center'><?php echo $titulo ?></h1>

<form action="<?php echo base_url() ?>/area/actualizar" method="post" autocomplete="off">
  <input type="hidden" name="id" value="<?php echo $dato['id'] ?>">
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-sm-4">
        <label>Nombre</label>
        <input value="<?php echo $dato['nombre'] ?>" class="form-control" id="nombre" name="nombre" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Apellido Paterno</label>
        <input value="<?php echo $dato['apellido_paterno'] ?>" class="form-control" id="apellido_paterno" name="apellido_paterno" type="text" require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Apellido Materno</label>
        <input value="<?php echo $dato['apellido_materno'] ?>" class="form-control" id="apellido_materno" name="apellido_materno" type="text" require>
      </div>
      <div class="col-12 col-sm-4">
        <label>foto</label>
        <input value="<?php echo $dato['foto'] ?>" class="form-control" id="foto" name="foto" type="text" require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Usuario</label>
        <input value="<?php echo $dato['usuario'] ?>" class="form-control" id="usuario" name="usuario" type="text" require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Clave</label>
        <input value="<?php echo $dato['clave'] ?>" class="form-control" id="clave" name="clave" type="text" require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Puesto</label>
        <select class="form-control" name="id_puesto" id="id_puesto" require>
          <option value="">Seleccione un puesto</option>
          <?php foreach ($puestos as $puesto) { ?>
            <option value="<?php echo $puesto['id']; ?>" <?php if ($puesto['id']== $dato['id_puesto']){echo 'selected'; }?> ><?php echo $puesto['nombre']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="col-12 col-sm-6">
        <label>Jefe Area</label>
        <select class="form-control" name="id_area" id="id_area" require>
          <option value="">Seleccione su jefe de area</option>
          <?php foreach ($areas as $area) { ?>
            <option value="<?php echo $area['id']; ?>"  <?php if ($area['id']== $dato['id_area']){echo 'selected'; }?>><?php echo $area['nombre']; ?></option>
          <?php } ?>
        </select>
      </div>

    </div>
  </div>
  <div class="form-group mt-4">
    <a href="<?php echo base_url() ?>/area" class="btn btn-primary">Volver</a>
    <button class="btn btn-success" type="submit">Aceptar</button>
  </div>
</form>

<?= $this->endSection(); ?>