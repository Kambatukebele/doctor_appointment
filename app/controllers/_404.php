<?php

  class _404 extends Controller
  {
    public function index()
    { $data['page_title'] = "404 | Page not found!"; 
      return $this->view("theme", "_404", $data);
    }
  }