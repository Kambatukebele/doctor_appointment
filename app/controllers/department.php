<?php

  class Department extends Controller
  {
    public function index()
    { $data['page_title'] = "Department | Docmed"; 
      return $this->view("theme", "department", $data);
    }
  }