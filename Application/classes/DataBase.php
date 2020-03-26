<?php
namespace DataBase;
use PDO;
use PDOException;
use System\Environment;
class DataBase extends Environment
{
    protected function DB(){
        $this->getVariables();
        $servername = $this->env['DB_HOST'];
        $username = $this->env['DB_USER'];
        $password = $this->env['DB_PASSWORD'];
        $db_name = $this->env['DB_NAME'];
        $db_type = $this->env['DB_TYPE'];
        try {
            $conn = new PDO("$db_type:host=$servername;dbname=$db_name", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $conn;
        }
        catch(PDOException $e)
        {
            echo "Connection failed: " . $e->getMessage();
            return false;
        }
    }


}