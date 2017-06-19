<?php


class USUARIO_Model
{
    private $db;

    public function __construct()
    {
        $this->db = PDO_Connection::getConnection();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM usuario";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id)
    {
        $sql = "SELECT * FROM usuario WHERE username=:username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":username", $username);
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
    public function addUsuario($username, $password)
    {
        $sql = "INSERT INTO usuario (username, password)
        VALUES
        (:username, :password)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
    }

    public function updateUsuario($username, $password)
    {
        $sql = "UPDATE usuario SET username=:username, password=:passwordWHERE username=:username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":passord", $password);
        $stmt->execute();
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
    }

    public function deleteUsuario($username)
    {
        $sql = "DELETE FROM usuario WHERE username=:username";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":username", $username);
        if (!$stmt->execute()) {
            throw new Exception(("ERROR DataBase"));
        }
    }

    public function searchUsuario($username, $password)
    {
        $sql = "SELECT * FROM usuario WHERE";
        if (!is_null($username) && !empty($username)) {
            $sql .= "username like= :username and ";
            $id = "%" . $username . "%";
        }
        if (!is_null($password) && !empty($password)) {
            $sql .= " password like :password and ";
            $password = "%" . $password . "%";
        }
        $sql .= " 1=1";
        $stmt = $this->db->prepare($sql);
        if (!is_null($username) && !empty($username)) {
            $stmt->bindParam(":username", $username);
        }
        if (!is_null($password) && !empty($password)) {
            $stmt->bindParam(":password", $password);
        }
        $sql2 = "SELECT * FROM usuario WHERE username=:$username and password=$password";
        error_log($sql2);
        if (!$stmt->execute()) {
//           error_log("ERROR");
            throw new Exception("ERROR DataBase");
        }
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    function validate($username, $password)
    {
        $sql="SELECT * from usuario where login=:login and password=:password";
        $stmt=$this->db->prepare($sql);
        $stmt->bindParam(":login", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } //end of function IsAuthenticated()
}
