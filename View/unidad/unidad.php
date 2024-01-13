<h1 class="page-header">Unidades </h1>

<div class="well well-sm text-right">
        <a class="btn btn-primary" href="?c=unidad&a=Nuevo">Nueva Unidad</a>
</div>

<table class="table table-striped">
    <thead>
        <tr>
            <th style="width:180px;">Número Unidad</th>
            <th style="width:200px;">Nombre Unidad</th>
            <th style="width:120px;">Abreviatura</th>
            <th style="width:120px;">Codigo Unidad</th>
            <th style="width:120px;">Usuario Registro</th>
            <th style="width:120px;">Usuario Modifico</th>
            <th style="width:190px;">Fecha Registro</th>
            <th style="width:120px;">Fecha Modifico</th>
            <th style="width:120px;">Estado Unidad</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($this->model->Listar() as $r): ?>
        <tr>
            <td><?php echo $r->id_unidad; ?></td>
            <td><?php echo $r->nombre; ?></td>
            <td><?php echo $r->abreviatura; ?></td>
            <td><?php echo $r->codigo_unidad; ?></td>
            <td><?php echo $r->usuario_registro; ?></td>
            <td><?php echo $r->usuario_modifico; ?></td>
            <td><?php echo $r->fecha_registro; ?></td>
             <td><?php echo $r->fecha_modifico; ?></td>
             <td><?php echo $r->estado_unidad; ?></td>
             <td>
                <a href="?c=unidad&a=Crud&id_unidad=<?php echo $r->id_unidad; ?>">Editar</a>
            </td>
            <td>
                <a onclick="javascript:return confirm('¿Seguro de eliminar este registro?');" href="?c=unidad&a=Eliminar&id_unidad=<?php echo $r->id_unidad; ?>">Eliminar</a>
            </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>
