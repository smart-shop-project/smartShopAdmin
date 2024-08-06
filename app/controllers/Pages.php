<?php 

class Pages extends Controller {
  private $adminModel;
  private $userModel;

  public function __construct() {
      $this->adminModel = $this->model('Dashboard');
      $this->userModel = $this->model('User');
  }

  public function index() {
      $users = $this->adminModel->getUsers();

      $data = [
          'users' => $users
      ];

      $this->view('pages/index', $data);
  }

    public function cart(){
      
        $data = [
            'title' => 'cart',
            'discription' => ''
          ];

          $this->view('pages/cart', $data);


    }

    public function wishlist(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

          $this->view('pages/wishlist', $data);
    }

    public function orders(){
      $orders = $this->adminModel->getOrders();

      $data = [
          'orders' => $orders
      ];
          $this->view('pages/orders', $data);
    }

    public function categories(){
      $categories = $this->adminModel->getCategories();

      $data = [
          'categories' => $categories
      ];
          $this->view('pages/categories', $data);
    }

    public function order_items(){
      $order_items = $this->adminModel->getOrder_items();

      $data = [
          'order_items' => $order_items
      ];
          $this->view('pages/order_items', $data);
    }

    public function products(){
      $products = $this->adminModel->getProducts();

      $data = [
          'products' => $products
      ];
          $this->view('pages/products', $data);
    }

    public function contact_us(){
      $contact_us = $this->adminModel->getContact_us();

      $data = [
          'contact_us' => $contact_us
      ];
          $this->view('pages/contact_us', $data);

    }

    public function product_categories(){
        $data = [
            'title' => '',
            'discription' => ''
          ];
          $this->view('pages/product_categories', $data);
    }

    public function login_signUp(){
        $data = [
            'title' => '',
            'discription' => ''
          ];
          $this->view('pages/login_signUp', $data);
    }
}