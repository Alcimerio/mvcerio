<?php
  class Pages extends Controller {
    public function __construct()
    {
      
    }

    public function index(){
      $data = ['title' => 'MVCerio'];
      $this->view('pages/index', $data);
    }

  }