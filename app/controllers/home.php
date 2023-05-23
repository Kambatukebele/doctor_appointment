<?php

  class Home extends Controller
  {
    public function index()
    { $data['page_title'] = "Home | Docmed"; 
      return $this->view("theme", "home", $data);
    }
  }