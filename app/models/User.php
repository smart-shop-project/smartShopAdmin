<?php 
  class User {
    private $db;
    public function __construct() { 
        $this->db = new Database;
    }

    public function login($email, $password) {
      $this->db->query("SELECT * FROM users WHERE email = :email ");
      $this->db->bind(':email', $email);
      $row = $this->db->single();
      $hashedPassword = $row->password;

      if(password_verify($password, $hashedPassword)) {
          return $row;
      }else{
          return false;
      }
  }
  
  public function findUserByEmail($email) {
      $this->db->query("SELECT * FROM users WHERE email = :email");
      $this->db->bind(':email', $email);
      $row= $this->db->single();
      
      if($this->db->rowCount() > 0){
          return true;
      } else{
          return false;
      }
  }

  public function getUserById($id) {
    $this->db->query("SELECT * FROM users WHERE id = :id");
    $this->db->bind(':id', $id);
    $row =$this->db->single();
    return $row;
  }
}

?>