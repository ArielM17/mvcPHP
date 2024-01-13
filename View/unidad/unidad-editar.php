<h1 class="page-header">
    <?php echo $uni->id_unidad != null ? $uni->nombre : 'Nuevo Registro'; ?>
</h1>

<ol class="breadcrumb">
  <li><a href="?c=unidad">Unidades</a></li>
  <li class="active"><?php echo $uni->id_unidad != null ? $uni->nombre : 'Nuevo Registro'; ?></li>
</ol>

<form id="frm-unidad" action="?c=unidad&a=Editar" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id_unidd" value="<?php echo  $uni->id_unidad; ?>" />
<div class="form-group">
      <label>Nombre Unidad</label>
      <input type="text" name="nombre" value="<?php echo $uni->nombre; ?>" class="form-control" placeholder="Ingrese nombre unidad" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Abreviatura</label>
        <input type="text" name="abreviatura" value="<?php echo $uni->abreviatura; ?>" class="form-control" placeholder="Ingrese abreviatura unidad" data-validacion-tipo="requerido|min:20" />
    </div>

    <div class="form-group">
        <label>Codigo Unidad</label>
        <input type="text" name="codigo_unidad" value="<?php echo $uni->codigo_unidad; ?>" class="form-control" placeholder="Ingrese codigo unidad" data-validacion-tipo="requerido|min:100" />
    </div>

    <div class="form-group">
        <label>Usuario Registro</label>
        <input type="text" name="usuario_registro" value="<?php echo $uni->usuario_registro; ?>" class="form-control" placeholder="Ingrese usuario registro" data-validacion-tipo="requerido|min:20" />
    </div>

  <div class="form-group">
        <label>Fecha Registro</label>
        <input type="text" name="fecha_registro" value="<?php echo $uni->fecha_registro; ?>" class="form-control" placeholder="Ingrese fecha registro" data-validacion-tipo="requerido|min:20" />
    </div> 
     <div class="form-group">
        <label>Usuario Modifico</label>
        <input type="text" name="usuario_modifico" value="<?php echo $uni->usuario_modifico; ?>" class="form-control" placeholder="Ingrese usuario modifico" data-validacion-tipo="requerido|min:20" />
    </div>

  <div class="form-group">
        <label>Fecha Modifico</label>
        <input type="text" name="fecha_modifico" value="<?php echo $uni->fecha_modifico; ?>" class="form-control" placeholder="Ingrese fecha modifico" data-validacion-tipo="requerido|min:20" />
    </div> 
    <div class="form-group">
        <label>Estado Unidad</label>
        <input type="text" name="estado_unidad" value="<?php echo $uni->estado_unidad; ?>" class="form-control" placeholder="Ingrese estado de unidad" data-validacion-tipo="requerido|min:240" />
    </div>
    <hr />

    <div class="text-right">
        <button class="btn btn-success">Actualizar</button>
    </div>
</form>

<script>
    $(document).ready(function(){
        $("#frm-unidad").submit(function(){
            return $(this).validate();
        });
    })
</script>
