<?php 
    // require_once '../helpers/session_helper.php';

  class Users extends Controller
  {
      public function __construct(){
          $this->userModel = $this->model('User');
      }

      public function login(){ 

        if ($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'email' => trim($_POST['email']),
                'password' => trim($_POST['password']),
                'email_err' => '',
                'password_err' => '',
            ];
            if (empty($data['email'])) {
                $data['email_err'] = 'Please enter email';
            }

            if (empty($data['password'])) {
                $data['password_err'] = 'Please enter password';
            }

            if($this->userModel->findUserByEmail($data['email'])){
                
            }else{
                
                $data['email_err'] = 'No admins found';
            }
            
            if (empty($data['email_err']) && empty($data['password_err'])){
                
                $loggedIn = $this->userModel->login($data['email'], $data['password']);
                if ($loggedIn) {
                    
                    if ($loggedIn->role == ('Admin')) {

                        $this->createUserSession($loggedIn);
                    } else {
                        $data['email_err'] = 'Sorry!, This login for admins only';
                        // $_SESSION['email_err'] = 'This login for admins only';
                        $this->view('users/login', $data);
                    }
                }else{
                    $data['password_err'] = ' Incorrect password';
                    $this->view('users/login', $data);  
                }
            }
            else{
                
                $this->view('users/login', $data);
            }

        }else{
            
            $data=[
                'email' => '',
                'password' => '',
                'email_err' => '',
                'password_err' => '',
            ];
            
            $this ->view('users/login',$data);
        }
    }

    public function createUserSession($user){
        $_SESSION['user_id'] = $user->id;
        $_SESSION['user_email'] = $user->email;
        $_SESSION['user_name'] = $user->username;
        $_SESSION['user_role'] = $user->role;
        header('Location: ' . URLROOT . '/pages/index');
    }

    public function logout() {
        unset($_SESSION['user_id']);
        unset($_SESSION['user_email']);
        unset($_SESSION['user_name']);
        unset($_SESSION['user_role']);
        session_destroy();
        redirect('users/login');
    }
    
}
?>