<?php 
class Pages extends controller {

    public function __construct(){
    }

    public function index(){

      if(isLoggedIn()){
        redirect('posts');
      }

      $data = [
        'title' => 'SHARE POSTS',
        'discription' => 'simple social network built on the zain MVC php framework'
      ];

      $this->view('pages/index', $data);
    }

    public function cart(){
        $data = [
            'title' => '',
            'discription' => ''
          ];
        
    }

    public function wishlist(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

    }

    public function orders(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

    }

    public function categories(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

    }

    public function order_items(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

    }

    public function products(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

    }

    public function contact_us(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

    }

    public function product_categories(){
        $data = [
            'title' => '',
            'discription' => ''
          ];

    }
}