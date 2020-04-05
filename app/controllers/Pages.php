<?php
  class Pages extends Controller {
    public function __construct(){
         //echo 'constructo';
    }

    public function index(){
      $data = [
        'title' => 'Welcome'
      ];

      $this->view('/Pages/index',$data);
    }

    public function about(){
      $this->view('/Pages/about');
    }
  }