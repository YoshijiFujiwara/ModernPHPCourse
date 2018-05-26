<?php
// initialize variables
$first_name = "";
$last_name = "";
$username = "";
$verify_username = "";
$password = "";
$verify_password = "";

// get posted form data
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$username = $_REQUEST['username'];
$verify_username = $_REQUEST['verify_username'];
$password = $_REQUEST['password'];
$verify_password = $_REQUEST['verify_password'];

// ensure that all fields are entered
if (($first_name == "")
  || ($last_name == "")
  || ($username == "")
  || ($verify_username == "")
  || ($verify_password == "")
  || ($last_name == "")) {
    header("Location: /register.html");
    exit();
  }

// first name must be >= 3 characters
if (strlen($first_name) < 3){
  header("Location: /register.html");
  exit();
}

// last name must be >= 3 characters
if (strlen($last_name) < 3){
  header("Location: /register.html");
  exit();
}

// username must match verify username
if ($username != $verify_username) {
  header("Location: /register.html");
  exit();
}

// password must match verify password
if ($password != $verify_password) {
  header("Location: /register.html");
  exit();
}

// write all values to scree
echo "First name: " . $first_name . "<br>";
echo "Last name: " . $last_name . "<br>";
echo "Username: " . $username . "<br>";
echo "Verify username: " . $verify_password . "<br>";
echo "Password: " . $password . "<br>";
echo "Verify password: " . $verify_password . "<br>";
