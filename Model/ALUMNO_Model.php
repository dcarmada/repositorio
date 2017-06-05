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
    public function deleteAlumno($dni){
        $sql="DELETE FROM alumno WHERE dni=:dni";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":dni", $dni);
        if(!$stmt->execute()){
            throw new Exception(("ERROR DataBase"));
        }
    }
}