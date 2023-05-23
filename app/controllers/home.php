<?php

  class Home extends Controller
  {
    public function index()
    { $data['page_title'] = "Home | Doctor Appoitment"; 
      return $this->view("theme", "home", $data);
    }
  }