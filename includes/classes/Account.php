<?php
  class Account {
    private $errorArray;

    public function __construct() {
      $this->errorArray = array();
    }

    public function register($un, $fn, $ln, $em, $pw, $pw2) {
      $this->validateUsername($un);
      $this->validateFirstName($fn);
      $this->validateLastName($ln);
      $this->validateEmail($em);
      $this->validatePasswords($pw, $pw2);

      if(empty($this->errorArray)) {
        //Insert into db
        return true;
      }
      else {
        return false;
      }
    }

    private function validateUsername($un) {
      if(strlen($un) > 25 || strlen($un) < 5) {
        array_push($this->errorArray, 'Your username must be between 5 & 25 characters');
        return;
      }
      //TODO: Check if username exists
    }

    private function validateFirstName($fn) {
      if(strlen($fn) > 25 || strlen($fn) < 2) {
        array_push($this->errorArray, 'Your first name must be between 2 & 25 characters');
        return;
      }
    }

    private function validateLastName($ln) {
      if(strlen($ln) > 25 || strlen($ln) < 2) {
        array_push($this->errorArray, 'Your last name must be between 2 & 25 characters');
        return;
      }
    }

    private function validateEmail($em) {
      if(!filter_var($em, FILTER_VALIDATE_EMAIL)) {
        array_push($this->errorArray, "Your email isn't valid");
        return;
      }

      //TODO: Check if email exists
    }

    private function validatePasswords($pw, $pw2) {
      if($pw != $pw2) {
        array_push($this->errorArray, "Your passwords don't match");
        return;
      }
      if(preg_match('/[^A-Za-Z0-9]/', $pw)) {
        array_push($this->errorArray, "Your password can only contain numbers and letters");
        return;
      }
      if(strlen($pw) > 30 || strlen($pw) < 5) {
        array_push($this->errorArray, 'Your password must be between 5 & 30 characters');
        return;
      }
    }
  }
?>
