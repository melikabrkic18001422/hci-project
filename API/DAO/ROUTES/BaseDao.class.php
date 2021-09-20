<?php


require_once dirname(__FILE__)."/../config.php";

class BaseDao{

private $connection;
public function __construct(){

    

try {
  $this->connection = new PDO("mysql:host=".Config::DB_HOST.";dbname=".Config::DB_SCHEME, Config::DB_USERNAME, Config::DB_PASSWORD, $username, $password);
  $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  throw $e;
}




}

public function insert(){

}

public function update(){


}


public function query($query,$params){

    $stmt = $pdo->prepare("SELECT * FROM users WHERE id=?");
    $stmt->execute([$id]); 
    $user = $stmt->fetch();
    

}

public function query_unique(){

}

}









?>