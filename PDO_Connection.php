<?php

class PDO_Connection
{
    const HOST = "localhost";
    const DBNAME = "iuprueba";
    const PORT = "3306";
    const USER = "root";
    const PASSWORD = "";
    const DRIVER = "mysql";

    public static function getConnection()
    {
         return new PDO(self::DRIVER . ":host=" . self::HOST . ";dbname=" . self::DBNAME . ";port=" . self::PORT, self::USER,
            self::PASSWORD);
    }
}