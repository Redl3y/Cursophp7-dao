<?php     

class Sql extends PDO {

    private $conn;

    public function __construct(){

        $this->conn = new PDO("mysql:host=localhost;dbname=dbphp7", "redley", "pentagono");
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    }
    private function setParams($statment, $parameters = array()){
        foreach ($parameters as $key => $value){

            $this->setParam($statment, $key, $value);
        }

    }
    private function setParam($statment, $key, $value){
        $statment->bindParam($key, $value);
    }

    public function query($rawQuery, $params = array()){
        $stmt = $this->conn->prepare($rawQuery);

        $this->setParams($stmt, $params);
        $stmt->execute();
        return $stmt;

       
    }
    public function select($rawQuery, $params = array()){
    
        $stmt = $this->query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }


}






?>