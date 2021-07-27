<?= $this->extend('main'); ?>
<?= $this->section('content'); ?>

<h1 class='text-center'><?php echo $titulo ?></h1>

<form action="<?php echo base_url() ?>/area/actualizar" method="post" autocomplete="off">
<input type="hidden" name="id" value="<?php echo $dato['id'] ?>" >
  <div class="form-group">
    <div class="row">
      <div class="col-12 col-sm-4">
        <label>Nombre</label>
        <input  value="<?php echo $dato['nombre'] ?>"   class="form-control" id="nombre" name="nombre" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Apellido Paterno</label>
        <input value="<?php echo $dato['apellido_paterno'] ?>" class="form-control" id="apellido_paterno" name="apellido_paterno" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-4">
        <label>Apellido Materno</label>
        <input value="<?php echo $dato['apellido_materno'] ?>" class="form-control" id="apellido_materno" name="apellido_materno" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Tipo</label>
        <input value="<?php echo $dato['tipo'] ?>" class="form-control" id="tipo" name="tipo" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Otros</label>
        <input value="<?php echo $dato['otro'] ?>" class="form-control" id="otro" name="otro" type="text" autofocus require>
      </div>
      <div class="col-12 col-sm-6">
        <label>Descripcion</label>
        <textarea class="form-control" name="desc_personal" id="desc_personal" cols="15" rows="10" require><?php echo $dato['desc_personal'] ?></textarea>
      </div>
      <div class="col-12 col-sm-6">
        <label>Especifique</label>
        <textarea class="form-control" name="especifique" id="especifique" cols="15" rows="10" require><?php echo $dato['especifique'] ?></textarea>
      </div>
    </div>
  </div>
  <div class="form-group mt-4">
  <a href="<?php echo base_url()?>/area" class="btn btn-primary">Volver</a>
  <button class="btn btn-success" type="submit">Aceptar</button>
  </div>
</form>

<?= $this->endSection(); ?>