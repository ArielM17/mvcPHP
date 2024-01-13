<?php
require_once 'model/unidad.php';

class unidadController{

    private $model;

    public function __CONSTRUCT(){
        $this->model = new unidades();
    }

    //Llamado plantilla principal
    public function Index(){
        require_once 'view/header.php';
        require_once 'view/unidad/unidad.php';
        require_once 'view/footer.php';
    }

    public function Crud(){
        $uni = new unidades();

        if(isset($_REQUEST['id_unidad'])){
            $uni = $this->model->Obtener($_REQUEST['id_unidad']);
        }

        require_once 'view/header.php';
        require_once 'view/unidad/unidad-editar.php';
        require_once 'view/footer.php';
    }

    public function Nuevo(){
        $uni = new unidades();

        require_once 'view/header.php';
        require_once 'view/unidad/unidad-nuevo.php';
        require_once 'view/footer.php';
    }

    public function Guardar(){
        $uni = new unidades();
        $uni->nombre = $_REQUEST['nombre'];
        $uni->abreviatura = $_REQUEST['abreviatura'];
        $uni->codigo_unidad = $_REQUEST['codigo_unidad'];
        $uni->usuario_registro = $_REQUEST['usuario_registro'];
        $uni->usuario_modifico = $_REQUEST['usuario_modifico'];
        $uni->fecha_registro = $_REQUEST['fecha_registro'];
        $uni->fecha_modifico = $_REQUEST['fecha_modifico'];
        $uni->estado_unidad = $_REQUEST['estado_unidad'];
        $this->model->Registrar($uni);

        header('Location: index.php?c=unidad');
    }

    public function Editar(){
        $uni = new unidades();
        $uni->id_unidad = $_REQUEST['id_unidad'];
        $uni->nombre = $_REQUEST['nombre'];
        $uni->abreviatura = $_REQUEST['abreviatura'];
        $uni->codigo_unidad = $_REQUEST['codigo_unidad'];
        $uni->usuario_registro = $_REQUEST['usuario_registro'];
        $uni->usuario_modifico = $_REQUEST['usuario_modifico'];
        $uni->fecha_registro = $_REQUEST['fecha_registro'];
        $uni->fecha_modifico = $_REQUEST['fecha_modifico'];
        $uni->estado_unidad = $_REQUEST['estado_unidad'];

        $this->model->Actualizar($uni);

        header('Location: index.php?c=unidad');
    }

    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id_unidad']);
        header('Location: index.php');
    }
}
