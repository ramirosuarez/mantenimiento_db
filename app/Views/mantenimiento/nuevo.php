<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>

<h1 class='text-center'><?php echo $titulo ?></h1>

<form action="<?php echo base_url() ?>/area/insertar" method="post" autocomplete="off">
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-sm-4 offset-sm-8">
        <label>Folio</label>
        <input class="form-control" id="folio" name="folio" type="text" require>
      </div>
      <div class="col-12 col-sm-10">
        <label>Jefe Area</label>
        <select class="form-control" name="id_area" id="id_area" require>
          <option value="">Seleccione su jefe de area</option>
          <?php foreach ($areas as $area) { ?>
            <option value="<?php echo $area['id']; ?>"><?php echo $area['nombre']; ?></option>
          <?php } ?>
        </select>
      </div>
      <div class="col-12 col-sm-4">
        <label>Nombre depto</label>
        <input class="form-control" value="<?php echo $area['id_puesto']; ?>" id="fecha" name="fecha" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Fecha</label>
        <input class="form-control" id="fecha" name="fecha" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Descripcion</label>
        <input class="form-control" id="descripcion" name="descripcion" type="text" require>
      </div>



    </div>
  </div>
  <div class="form-group mt-4">
    <a href="<?php echo base_url() ?>/area" class="btn btn-primary">Volver</a>
    <button class="btn btn-success" type="submit">Aceptar</button>
  </div>
</form>

<?= $this->endSection(); ?>