<?php

class database{

    protected $db;

    public function __construct(){
        $this -> db = new PDO ("mysql:host=localhost; dbname=eshop; charset=utf8", "root", "");
        $this -> db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); //remove from production!
    }

    public function insertproduct($name, $price, $size, $color){
        $stmt = $this -> db -> prepare("INSERT INTO products (name, price, size, color) VALUES (?, ?, ?, ?)");
        $stmt -> execute([$name, $price, $size, $color]);
        return $this->db->lastInsertId();
    }
    
    public function insertorder($id_user){
        $stmt = $this -> db -> prepare("INSERT INTO orders (id_user, created) VALUES (?, NOW())");
        $stmt -> execute([$id_user]);
        return $this->db->lastInsertId();
    }

    public function insertproducttorder($id_order, $id_product){
        $stmt = $this -> db -> prepare("INSERT INTO orders_have_products (id_order, id_product) VALUES (?, ?)");
        $stmt -> execute([$id_order, $id_product]);
        return $this->db->lastInsertId();
    }

    public function getProducts(){
        $stmt = $this -> db -> prepare("SELECT id, name, price, size, color FROM products");
        $stmt -> execute();
        return $stmt -> fetchAll();
    }
    public function getProduct($id){
        $stmt = $this -> db -> prepare("SELECT id, name, price, size, color FROM products WHERE id = ?");
        $stmt -> execute([$id]);
        return $stmt -> fetch();
    }

    public function insertUser($name, $email, $password){
        $stmt = $this -> db -> prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $stmt -> execute([$name, $email, password_hash($password, PASSWORD_DEFAULT)]);
        return $this->db->lastInsertId();
    }

    public function getUser($id){
        $stmt = $this -> db -> prepare("SELECT id, name, email, password FROM users WHERE id = ?");
        $stmt -> execute([$id]);
        return $stmt -> fetch();
    }    

    public function getUserByEmail($email){
        $stmt = $this -> db -> prepare("SELECT id, name, email, password FROM users WHERE email = ?");
        $stmt -> execute([$email]);
        return $stmt -> fetch();
    } 

} // end class 

