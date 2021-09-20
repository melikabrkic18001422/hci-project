<?php

require_once dirname(__FILE__)."/BaseDao.class.php";
class CustomerDao extends BaseDao{

    public function get_user_by_email($email){

       return $this->query("SELECT * FROM Customer WHERE email = :email", ["email"=> $email]);

    }

    public function get_user_by_id($customer_id){

        return $this->query("SELECT * FROM Customer WHERE customer_id = :customer_id", ["customer_id"=> $customer_id]);
 
}
 
public function add_customer($customer){

    $sql = "INSERT INTO customer (f_name, l_name, age, email) VALUES (:f_name, :l_name, :age, :email)";
    $stmt= $this->connection->prepare($sql);
    $stmt->execute($customer);
    $customer['customer_id'] = $this->connection->lastInsertId();
    return $customer;


}


}

?>