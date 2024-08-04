<?php 
class Pages extends controller {

    public function __construct(){
    }

    public function index(){

      // if(isLoggedIn()){
      //   redirect('pages');
      // }

      $data = [
        'title' => 'index TEST',
        'discription' => 'Test description'
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
        $data = [
            'title' => '',
            'discription' => ''
          ];
          $this->view('pages/orders', $data);
    }

    public function categories(){
        $data = [
            'title' => '',
            'discription' => ''
          ];
          $this->view('pages/categories', $data);
    }

    public function order_items(){
        $data = [
            'title' => '',
            'discription' => ''
          ];
          $this->view('pages/order_items', $data);
    }

    public function products(){
        $data = [
            'title' => '',
            'discription' => ''
          ];
          $this->view('pages/products', $data);
    }

    public function contact_us(){
        $data = [
            'title' => '',
            'discription' => ''
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
}