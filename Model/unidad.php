<?php
class unidades
{
	private $pdo;

    public $id_unidad;
    public $nombre;
    public $abreviatura;
    public $codigo_unidad;
    public $usuario_registro;
    public $usuario_modifico;
    public $fecha_registro;
    public $fecha_modifico;
    public $estado_unidad;

    public function __CONSTRUCT()
	{
		try
		{
			$this->pdo = Database::Conectar();
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Listar()
	{
		try
		{
			$result = array();

			$stm = $this->pdo->prepare("SELECT * FROM unidades");
			$stm->execute();

			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		catch(Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Obtener($id_unidad)
	{
		try
		{
			$stm = $this->pdo->prepare("SELECT * FROM unidades WHERE id_unidad = ?");
			$stm->execute(array($id_unidad));
			return $stm->fetch(PDO::FETCH_OBJ);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id_unidad)
	{
		try
		{
			$stm = $this->pdo
			            ->prepare("DELETE FROM unidades WHERE id_unidad = ?");

			$stm->execute(array($id_unidad));
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try
		{
        	$sql = "UPDATE unidades SET
			nombre = ?,
            abreviatura = ?,
        	codigo_unidad = ?,
    		usuario_registro = ?,
            usuario_modifico = ?,
            fecha_registro = ?,
        	fecha_modifico = ?,
        	estado_unidad = ?
			WHERE id_unidad = ?";

            $this->pdo->prepare($sql)
			     ->execute(
				    array(
                    	$data->nombre,
                        $data->abreviatura,
                        $data->codigo_unidad,
                        $data->usuario_registro,
                        $data->usuario_modifico,
                        $data->fecha_registro,
                        $data->fecha_modifico,  
                        $data->estado_unidad,                
                     	$data->id_unidad
					)
				);
            echo '$sql';
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}

	public function Registrar(unidades $data)
	{
		try
		{
		$sql = "INSERT INTO unidades (nombre,abreviatura,codigo_unidad,usuario_registro,fecha_registro,estado_unidad)
		        VALUES (?, ?, ?, ?,?,?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    	$data->nombre,
                        $data->abreviatura,
                        $data->codigo_unidad,
                        $data->usuario_registro,
                        $data->fecha_registro,
                        $data->estado_unidad
                	)
			);
		} catch (Exception $e)
		{
			die($e->getMessage());
		}
	}
}
