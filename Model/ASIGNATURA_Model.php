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
    public function searchAsignatura($id, $nombre, $num_creditos, $departamento, $categoria){
        $sql = "SELECT * FROM asignatura WHERE";
        if (!is_null($id)&&!empty($id)) {
            $sql .= "id like :id and ";
            $id = "%" . $id . "%";
        }
        if (!is_null($nombre)&&!empty($nombre)) {
            $sql .= " nombre like :nombre and ";
            $nombre = "%" . $nombre . "%";
        }
        if (!is_null($num_creditos)&&!empty($num_creditos)) {
            $sql .= " num_creditos like :num_creditos and ";
            $num_creditos = "%" . $num_creditos . "%";
        }
        if (!is_null($departamento)&&!empty($departamento)) {
            $sql .= " departamento like :departamento and ";
            $departamento = "%" . $departamento . "%";
        }
        if (!is_null($categoria)&&!empty($categoria)) {
            $sql .= " categoria like :categoria and ";
            $categoria = "%" . $categoria . "%";
        }
        $sql.=" 1=1";
        $stmt = $this->db->prepare($sql);
        if (!is_null($id)&&!empty($id)) {
            $stmt->bindParam(":id", $id);
        }
        if (!is_null($nombre)&&!empty($nombre)) {
            $stmt->bindParam(":nombre", $nombre);
        }
        if (!is_null($num_creditos)&&!empty($num_creditos)) {
            $stmt->bindParam(":num_creditos", $num_creditos);
        }
        if (!is_null($departamento)&&!empty($departamento)) {
            $stmt->bindParam(":departamento", $departamento);
        }
        if (!is_null($categoria)&&!empty($categoria)) {
            $stmt->bindParam(":categoria", $categoria);
        }
        $sql2="SELECT * FROM ASIGNATURA WHERE id=:$id and nombre=$nombre and num_creditos=$num_creditos and departamento=$departamento 
and categoria=$categoria";
        error_log($sql2);
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}