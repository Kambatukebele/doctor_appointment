<?php
  class Patient 
  {
    public $patient_email_adress; 
    public $patient_password;
    public $patient_first_name; 
    public $patient_last_name; 
    public $patient_date_of_birth;
    public $patient_gender; 
    public $patient_address; 
    public $patient_phone_no;
    public $patient_marital_status;
    public $patient_added_on;
    public $patient_verification_code;
    public $patient_email_verify; 

    public function sanitizeInputs($POST)
    {
      htmlspecialchars($POST);
      addslashes($POST);
      trim($POST); 

      return $POST; 
    }

    public function registerPatient()
    {
      $database = new Database(); 

    }

    public function loginPatient()
    {

    }
  }