<?php
  class Pages extends Controller {
    public function __construct(){
         //echo 'constructo';
         $this->postModel = $this->model('Post');
    
    }

    public function index(){
      $data = [
        'title' => 'Welcome'
      ];

      $this->view('/Pages/index',$data);
    }

    public function about(){
      $data = [
        'title' => 'ABOUT US'
      ];

      $this->view('/Pages/about',$data);
    }
  }