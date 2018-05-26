<?php
// initialize variables
$okay = true;

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
    $okay = false;
//    header("Location: /register.php");
//    exit();
}

// first name must be >= 3 characters
if (strlen($first_name) < 3){
    $okay = false;
//    header("Location: /register.php");
//    exit();
}

// last name must be >= 3 characters
if (strlen($last_name) < 3){
    $okay = false;
//    header("Location: /register.php");
//    exit();
}

// username must match verify username
if ($username != $verify_username) {
    $okay = false;
//    header("Location: /register.php");
//    exit();
}

// password must match verify password
if ($password != $verify_password) {
    $okay = false;
//    header("Location: /register.php");
//    exit();
}

if (!$okay) {
    $msg = "フォームの内容に不備があります";
    $_SESSION['msg'] = $msg;
    header("Location: /register.php");
    exit();
}

// write all values to scree
echo "First name: " . $first_name . "<br>";
echo "Last name: " . $last_name . "<br>";
echo "Username: " . $username . "<br>";
echo "Verify username: " . $verify_password . "<br>";
echo "Password: " . $password . "<br>";
echo "Verify password: " . $verify_password . "<br>";

echo "<br><br>";

foreach ($_REQUEST as $name => $value) {
    echo $name . " = " . $value . "<br>";
}
