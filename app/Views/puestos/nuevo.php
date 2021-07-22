<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>

<h1 class='text-center'><?php echo $titulo ?></h1>

<form action="<?php echo base_url() ?>/puesto/insertar" method="post" autocomplete="off">
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-sm-8 offset-sm-2">
        <label>Nombre</label>
        <input class="form-control" id="nombre" name="nombre" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Descripcion</label>
        <textarea class="form-control" name="descripcion" id="descripcion" cols="15" rows="10" require></textarea>
      </div>
      <div class="col-12 col-sm-6">
        <label>Especifique</label>
        <textarea class="form-control" name="especifique" id="especifique" cols="15" rows="10" require></textarea>
      </div>
    </div>
  </div>
  <div class="form-group mt-4">
  <a href="<?php echo base_url()?>/puesto" class="btn btn-primary">Volver</a>
  <button class="btn btn-success" type="submit">Aceptar</button>
  </div>
</form>

<?= $this->endSection(); ?>