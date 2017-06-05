<?php


class ASIGNATURA_Model
{
    private $db;

    public function __construct()
    {
        $this->db = PDO_Connection::getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM asignatura";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getById($id)
    {
        $sql = "SELECT * FROM asignatura WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param $id
     * @param $nombre
     * @param $num_creditos
     * @param $departamento
     * @param $categoria
     * @throws Exception
     */
    public function addAsignatura($id, $nombre, $num_creditos, $departamento, $categoria)
    {
        $sql = "INSERT INTO asignatura (id, nombre, num_creditos, departamento, categoria)
        VALUES
        (:id, :nombre, :num_creditos, :departamento, :categoria)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":num_creditos", $num_creditos);
        $stmt->bindParam(":departamento", $departamento);
        $stmt->bindParam(":categoria", $categoria);
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
    }

    public function updateAsignatura($id, $nombre, $num_creditos, $departamento, $categoria)
    {
        $sql = "UPDATE asignatura SET nombre=:nombre, num_creditos=:num_creditos, departamento=:departamento, 
categoria=:categoria WHERE id=:id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":num_creditos", $num_creditos);
        $stmt->bindParam(":departamento", $departamento);
        $stmt->bindParam(":categoria", $categoria);
        $stmt->execute();
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
    }
    public function deleteAsignatura($id){
        $sql="DELETE FROM asignatura WHERE id=:id";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":id", $id);
        if(!$stmt->execute()){
            throw new Exception(("ERROR DataBase"));
        }
    }
    }