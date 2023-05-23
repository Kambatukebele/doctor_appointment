<?php

  class Doctors extends Controller
  {
    public function index()
    { $data['page_title'] = "Doctors | Docmed"; 
      return $this->view("theme", "doctors", $data);
    }
  }