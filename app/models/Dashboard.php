<?php 
  class Dashboard extends Controller {

    private $db;

    public function __construct() { 

        $this->db = new Database; 
    }

    public function getUsers() {
        $this->db->query("SELECT * FROM users");
        return $this->db->resultSet();
    }

    public function getOrders() {
        $this->db->query("SELECT * FROM orders");
        return $this->db->resultSet();
    }

    public function getCategories() {
        $this->db->query("SELECT * FROM categories");
        return $this->db->resultSet();
    }

    public function getProducts() {
        $this->db->query("SELECT * FROM products");
        return $this->db->resultSet();
    }

    public function getOrder_items() {
        $this->db->query("SELECT * FROM order_items");
        return $this->db->resultSet();
    }

    public function getContact_us() {
        $this->db->query("SELECT * FROM contact_us");
        return $this->db->resultSet();
    }
    
  }

?>