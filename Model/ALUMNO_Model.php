<?php

class ALUMNO_Model
{
    private $db;

    public function __construct()
    {
        $this->db = PDO_Connection::getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM alumno";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByDNI($dni)
    {
        $sql = "SELECT * FROM alumno WHERE dni=:dni";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":dni", $dni);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    /**
     * @param string $dni
     * @param string $nombre
     * @param string $apellidos
     * @param DateTime int $fecha_nacimiento
     * @param int $telefono
     * @param string $direccion
     * @param boolean $es_becario
     */
    public function addAlumno($dni, $nombre, $apellidos, $fecha_nacimiento, $telefono, $direccion, $es_becario)
    {
        $sql = "INSERT INTO alumno (dni, nombre, apellidos, fecha_nacimiento, telefono, direccion, es_becario)
        VALUES
        (:dni, :nombre, :apellidos, :fecha_nacimiento, :telefono, :direccion, :es_becario)";
        $date = $fecha_nacimiento->format("Y-m-d");
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":dni", $dni);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellidos", $apellidos);
        $stmt->bindParam(":fecha_nacimiento", $date);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":direccion", $direccion);
        $intval = intval($es_becario);
        $stmt->bindParam(":es_becario", $intval);
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
    }

    public function updateAlumno($dni, $nombre, $apellidos, $fecha_nacimiento, $telefono, $direccion, $es_becario)
    {
        $sql = "UPDATE alumno SET nombre=:nombre, apellidos=:apellidos, fecha_nacimiento=:fecha_nacimiento, 
telefono=:telefono, direccion=:direccion, es_becario=:es_becario WHERE dni=:dni";
        $date = $fecha_nacimiento->format("Y-m-d");
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":dni", $dni);
        $stmt->bindParam(":nombre", $nombre);
        $stmt->bindParam(":apellidos", $apellidos);
        $stmt->bindParam(":fecha_nacimiento", $date);
        $stmt->bindParam(":telefono", $telefono);
        $stmt->bindParam(":direccion", $direccion);
        $intval = intval($es_becario);
        $stmt->bindParam(":es_becario", $intval);
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
    }

    public function deleteAlumno($dni)
    {
        $sql = "DELETE FROM alumno WHERE dni=:dni";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":dni", $dni);
        if (!$stmt->execute()) {
            throw new Exception(("ERROR DataBase"));
        }
    }

    /**
     * @param $dni
     * @param $nombre
     * @param $apellidos
     * @param DateTime $fecha_nacimiento
     * @param $telefono
     * @param $direccion
     * @param $es_becario
     * @throws Exception
     */
    public function searchAlumno($dni, $nombre, $apellidos, $fecha_nacimiento, $telefono, $direccion, $es_becario)
    {
        $sql = "SELECT * FROM alumno WHERE";
        if (!is_null($dni)&&!empty($dni)) {
            $sql .= " dni like :dni and ";
            $dni = "%" . $dni . "%";
        }
        if (!is_null($nombre)&&!empty($nombre)) {
            $sql .= " nombre like :nombre and ";
            $nombre = "%" . $nombre . "%";
        }
        if (!is_null($apellidos)&&!empty($apellidos)) {
            $sql .= " apellidos like :apellidos and ";
            $apellidos = "%" . $apellidos . "%";
        }
        if (!is_null($fecha_nacimiento)&&!empty($fecha_nacimiento)) {
            $sql .= " fecha_nacimiento=:fecha_nacimiento and ";
            $date = $fecha_nacimiento->format("Y-m-d");
        }
        if (!is_null($telefono)&&!empty($telefono)) {
            $sql .= " telefono like :telefono and ";
            $telefono = "%" . $telefono . "%";
        }
        if (!is_null($direccion)&&!empty($direccion)) {
            $sql .= " direccion like :direccion and ";
            $direccion = "%" . $direccion . "%";
        }
        if (!is_null($es_becario)&&!empty($es_becario)) {
            $sql .= " es_becario=:es_becario and ";
            $es_becario = "%" . $es_becario . "%";
        }
        $sql.=" 1=1";
        $stmt = $this->db->prepare($sql);
        if (!is_null($dni)&&!empty($dni)) {
            $stmt->bindParam(":dni", $dni);
        }
        if (!is_null($nombre)&&!empty($nombre)) {
            $stmt->bindParam(":nombre", $nombre);
        }
        if (!is_null($apellidos)&&!empty($apellidos)) {
            $stmt->bindParam(":apellidos", $apellidos);
        }
        $date ="";
        if (!is_null($fecha_nacimiento)&&!empty($fecha_nacimiento)) {
            $stmt->bindParam(":fecha_nacimiento", $date);
            $date=$fecha_nacimiento->format("Y-m-d");
        }
        if (!is_null($telefono)&&!empty($telefono)) {
            $stmt->bindParam(":telefono", $telefono);
        }
        if (!is_null($direccion)&&!empty($direccion)) {
            $stmt->bindParam(":direccion", $direccion);
        }
        if (!is_null($es_becario)&&!empty($es_becario)) {
            $intval = intval($es_becario);
            $stmt->bindParam(":es_becario", $intval);
        }
        $sql2="SELECT * FROM ALUMNO WHERE dni=:$dni and nombre=$nombre and apellidos=$apellidos and fecha_nacimiento=$date and telefono=$telefono and
direccion=$direccion and es_becario=$es_becario";
        error_log($sql2);
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}