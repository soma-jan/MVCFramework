<?php
  class Pages extends Controller {
    public function __construct(){
         //echo 'constructo';
    }

    public function index(){
      $data = [
        'title' => 'Welcome'
      ];

      $this->view('hello');
    }

    public function about(){
      //$this->view('pages/about');
    }
  }