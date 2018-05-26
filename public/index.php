<?php
include(__DIR__ . "/../bootstrap/start.php");
Dotenv::load(__DIR__ . "/../");
include (__DIR__ . "/../bootstrap/db.php");
include(__DIR__ . "/../routes.php");

$match = $router->match();

list($controller, $method) = explode("@", $match['target']);

if (is_callable(array($controller, $method))) {
    $object = new $controller();
    call_user_func_array(array($object, $method), array($match['params']));
} else {
    echo "Cannot find $controller -> $method";
    exit();
}

//
////funciton使ってかけるのね
//$router->map('GET', '/', function () {
//    include(__DIR__ . "/../views/home.php");
//});
//
//$router->map('GET', '/register', function () {
//    include(__DIR__ . "/../views/register.php");
//})
//
//$router->map('POST', '/register', function () {
//    include(__DIR__ . "/../views/doRegister.php");
//});
//
//$router->map('GET', '/login', function () {
//    include(__DIR__ . "/../views/login.php");
//});
//
//$match = $router->match();
//
//if ($match && is_callable($match['target'])) {
//    call_user_func_array($match['target'], $match['params']);
//} else {
//    // no matching route found!
//    header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
//}

//
//$url = explode('/', $_SERVER['REQUEST_URI']);
//
//
//if ($url[1] == "") {
//    //display a home page
//    include(__DIR__ . "/../views/home.php");
//    exit();
//
//} else if ($url[1] == "register") {
//    //display the register page
//    include(__DIR__ . "/../views/register.php");
//    exit();
//
//} else if ($url[1] == "login") {
//    //display the login page
//    include(__DIR__ . "/../views/index.html");
//    exit();
//}
