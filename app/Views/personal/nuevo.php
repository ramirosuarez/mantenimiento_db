<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>

<h1 class='text-center'><?php echo $titulo ?></h1>

<form action="<?php echo base_url() ?>/personal/insertar" method="post" autocomplete="off">
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-sm-4">
        <label>Nombre</label>
        <input class="form-control" id="nombre" name="nombre" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Apellido Paterno</label>
        <input class="form-control" id="apellido_paterno" name="apellido_paterno" type="text"  require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Apellido Materno</label>
        <input class="form-control" id="apellido_materno" name="apellido_materno" type="text"  require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Tipo</label>
        <input class="form-control" id="tipo" name="tipo" type="text"  require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Otros</label>
        <input class="form-control" id="otro" name="otro" type="text"  require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Descripcion</label>
        <textarea class="form-control" name="desc_personal" id="desc_personal" cols="15" rows="10" require></textarea>
      </div>
      <div class="col-12 col-sm-6">
        <label>Especifique</label>
        <textarea class="form-control" name="especifique" id="especifique" cols="15" rows="10" require></textarea>
      </div>
    </div>
  </div>
  <div class="form-group mt-4">
  <a href="<?php echo base_url()?>/personal" class="btn btn-primary">Volver</a>
  <button class="btn btn-success" type="submit">Aceptar</button>
  </div>
</form>

<?= $this->endSection(); ?>