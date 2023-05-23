<?php

  class Contact extends Controller
  {
    public function index()
    { $data['page_title'] = "Contact | Docmed"; 
      return $this->view("theme", "contact", $data);
    }
  }