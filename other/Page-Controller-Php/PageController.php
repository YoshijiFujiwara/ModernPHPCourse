<?php
use Respect\Validation\Validator as Validator;

class PageController {

  public function getShowHomePage() {
      include(__DIR__ . "/../views/home.php");
  }

  public function getShowRegisterPage() {
      include(__DIR__ . "/../views/register.php");
  }

  public function postShowRegisterPage() {
      // validate data
      $errors = [];

      if (Validator::string()->length(3)->validate($_REQUEST['first_name']) == false){
          $errors[] = "First name must be at least three characters long!";
      }
      if (Validator::string()->length(3)->validate($_REQUEST['last_name']) == false){
          $errors[] = "Last name must be at least three characters long!";
      }
      if (Validator::email()->validate($_REQUEST['email']) == false){
          $errors[] = "You must enter a valid email address!";
      }
      if (Validator::string()->length(3)->validate($_REQUEST['password']) == false){
          $errors[] = "Password must be at least three characters long!";
      }
      if (Validator::equals($_REQUEST['email'])->validate($_REQUEST['verify_email']) == false){
          $errors[] = 'Email and verify email do not match!';
      }
      if (Validator::equals($_REQUEST['password'])->validate($_REQUEST['verify_password']) == false){
          $errors[] = 'Password and verify password do not match!';
      }

      print_r($errors);
      exit;

      // if validation fails, go back to register
      // page and display error message

      // save this data into a database
      $user = new User;
      $user->first_name = $_REQUEST['first_name'];
      $user->last_name = $_REQUEST['last_name'];
      $user->email = $_REQUEST['email'];
      $user->password = $_REQUEST['password'];
      $user->save();

      echo "Posted!";
  }

  public function getShowLoginPage() {
      include(__DIR__ . "/../views/login.php");
  }

  public function getTestDB(){
    $user = User::find(1);
    echo "User's name is " . $user->first_name . " " . $user->last_name;
  }

}
